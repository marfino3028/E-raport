<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Guru;
use PDF;

use Validator,File,Redirect,Response;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_guru = DB::table('guru')->get();
        return view('guru.index', compact('ar_guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('guru.form');
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
            'nip'=>'required|unique:guru|max:10',
            'nama'=>'required|max:45',
            'tempat'=>'required',
            'tanggal'=>'required',
            'alamat'=>'required',
            'hp'=>'required',
            'email'=>'nullable|email',
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
         ],[
             'nip.required'=>'NIP Wajib untuk diisi',
             'nip.unique'=>' NIP ini sudah ada',
             'nip.max'=>' NIP ini melebihi 10 karakter',
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'tempat.required'=>'Tempat Lahir Wajib untuk diisi',
             'tanggal.required'=>'Tanggal Lahir Wajib untuk diisi',
             'alamat.required'=>'Alamat Wajib untuk diisi',
             'hp.required'=>'HP Wajib untuk diisi',
             'email.email'=>'email harus berformat email',
             'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
             'foto.max' =>'File Foto Melebihi 2048 KB',
         ])->validate();
        if(!empty($request->foto)){
            /*$request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);*/
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nip.'.jpg';  
            $request->foto->move(public_path('imgguru'), $fileName);
        }else{
            $fileName = '';
        }
        DB::table('guru')
        ->insert(
            [
                'nip'=>$request->nip,
                'nama'=>$request->nama,
                'tempat_lahir'=>$request->tempat,
                'tanggal_lahir'=>$request->tanggal,
                'alamat'=>$request->alamat,
                'hp'=>$request->hp,
                'email'=>$request->email,
                'foto'=>$fileName,
            ]
        );
        return redirect()->route('guru.index')
                         ->with('success','Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_guru = DB::table('guru')
        ->where('guru.id', '=', $id)
        ->get();
        return view ('guru.show',
            compact('ar_guru')
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
        $data = Guru::where('id',$id)->get();
        return view('guru.form_edit', compact('data'));
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
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nip.'.jpg';  
            $request->foto->move(public_path('imgguru'), $fileName);
        }else{
            $fileName = '';
        }
        DB::table ('guru')->where('id',$id)->update(
            [
                'nip'=>$request->nip,
                'nama'=>$request->nama,
                'tempat_lahir'=>$request->tempat,
                'tanggal_lahir'=>$request->tanggal,
                'alamat'=>$request->alamat,
                'hp'=>$request->hp,
                'email'=>$request->email,
                'foto'=>$fileName,
            ]
        );
        return redirect()->route('guru.index')
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
        DB::table ('guru')->where('id',$id)->delete();
        return back()->with('success','Data Berhasil Dihapus!');
        return redirect('/guru');
    }
    public function pdfguru()
    {
    $ar_guru = DB::table('guru')
    ->get();
    $pdf = PDF::loadView('guru.DataGuru',['ar_guru' =>$ar_guru ] )
    ->setPaper('a4','potrait');
        //download
        //return $pdf->download('datapegawai.pdf');
        //open di web
    return $pdf->stream();
    }
}
