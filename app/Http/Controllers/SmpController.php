<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Siswa;
use App\Kategori;

use PDF;
use Validator,File,Redirect,Response;

class SmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_smp = DB::table('siswa')
        ->join('kategori', 'kategori.id', '=', 'siswa.kategori_id')
        ->select('siswa.*', 'kategori.nama AS jenis')
        ->where('kategori_id', '=', '1')
        ->get();
        return view('smp.index', compact('ar_smp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('smp.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'nis'=>'required|unique:siswa|max:10',
            'nama'=>'required|max:45',
            'kelas'=>'required',
            'kategori'=>'required',
            'tempat'=>'required',
            'tanggal'=>'required',
            'alamat'=>'required',
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
         ],[
             'nis.required'=>'NIS Wajib untuk diisi',
             'nis.unique'=>' NIS ini sudah ada',
             'nis.max'=>' NIS ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'kelas.required'=>'Kelas Wajib untuk diisi',
             'kategori.required'=>'Kategori Wajib untuk dipilih',
             'tempat.required'=>'Tempat Lahir Wajib untuk diisi',
             'tanggal.required'=>'Tanggal Lahir Wajib untuk diisi',
             'alamat.required'=>'Alamat Wajib untuk diisi',
             'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
         ])->validate();
        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            /*$request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);*/
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nis.'.jpg';  
            $request->foto->move(public_path('imgsiswa'), $fileName);
        }else{
            $fileName = '';
        }
        
        //tangkap request form
        DB::table('siswa')
        ->join('kategori', 'kategori.id', '=', 'siswa.kategori_id')
        ->select('siswa.*','kategori.nama AS jenis')
        ->insert(
            [
                'nis'=>$request->nis,
                'nama'=>$request->nama,
                'kelas'=>$request->kelas,
                'kategori_id'=>$request->kategori,
                'tempat_lahir'=>$request->tempat,
                'tanggal_lahir'=>$request->tanggal,
                'alamat'=>$request->alamat,
                'foto'=>$fileName,
            ]
        );
        //landing page
        return redirect()->route('siswa_smp.index')

        ->with('success','Data Berhasil Ditambah!');
        return redirect ('/siswa_smp');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_smp = DB::table('siswa')
        ->join('kategori', 'kategori.id', '=', 'siswa.kategori_id')
        ->select('siswa.*', 'kategori.nama AS jenis')
        ->where('siswa.id', '=', $id)
        ->get();
        return view ('smp.show',
            compact('ar_smp')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::where('id',$id)->get();
        return view('smp.form_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nis.'.jpg';  
            $request->foto->move(public_path('imgsiswa'), $fileName);
        }else{
            $fileName = $request->nis.'.jpg';
        }
        //jalankan query update
        DB::table ('siswa')->where('id',$id)->update(
            [
                'nis'=>$request->nis,
                'nama'=>$request->nama,
                'kelas'=>$request->kelas,
                'kategori_id'=>$request->kategori,
                'tempat_lahir'=>$request->tempat,
                'tanggal_lahir'=>$request->tanggal,
                'alamat'=>$request->alamat,
                'foto'=>$fileName,
            ]
        );
        //landing page
        return redirect()->route('siswa_smp.index')

        ->with('success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table ('siswa')->where('id',$id)->delete();
       return back()->with('success','Data Berhasil Dihapus!');
       return redirect('/siswa_smp');
   }

   public function pdfsmp()

   {
    $ar_smp = DB::table('siswa')
    ->join('kategori', 'kategori.id', '=', 'siswa.kategori_id')
    ->select('siswa.*', 'kategori.nama AS jenis')
    ->where('kategori_id', '=', '1')
    ->get();
    $pdf = PDF::loadView('smp.DataSMP',['ar_smp' =>$ar_smp ] )
    ->setPaper('a4','potrait');
        //download
        //return $pdf->download('datapegawai.pdf');
        //open di web
    return $pdf->stream();

}
}
