<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Siswa;
use App\Tahun;
use App\Mapel;
use App\Walas;
use App\Penilaian;
use PDF;

class PenilaiansmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_penilaian = DB::table('penilaian')
        ->join('siswa', 'siswa.id', '=', 'penilaian.siswa_id')
        ->join('kategori', 'kategori.id', '=', 'penilaian.kategori_id')
        ->select('penilaian.*', 'siswa.nis as nis', 'siswa.nama as nama', 'siswa.kelas as kelas','kategori.id as kategori')
        ->where('kategori.id', '=', '1')
        ->get();
        return view('penilaiansmp.index', compact('ar_penilaian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('penilaiansmp.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('penilaian')
        ->insert(
            [
                'kategori_id'=>$request->kategori,
                'siswa_id'=>$request->siswa,
                'tahun_akademik_id'=>$request->tahun,
                'mapel_id'=>$request->mapel,
                'nilai'=>$request->nilai,
                'kkm'=>$request->kkm,
                'wali_kelas_id'=>$request->walas,
                'sekolah_id'=>$request->kepsek,
                'rangking'=>$request->rangking,
                'kategori_id'=>$request->kategori,
            ]
        );
        //landing page
        return redirect()->route('penilaiansmp.index')

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table ('penilaian')->where('id',$id)->delete();
        return back()->with('success','Data Berhasil Dihapus!');
        return redirect('/penilaiansmp');
    }
    public function pdfsmp(Request $request, $id)
    {    
     $ar_smp = DB::table('penilaian')
     ->join('siswa', 'siswa.id', '=', 'penilaian.siswa_id')
     ->join('tahun_akademik', 'tahun_akademik.id', '=', 'penilaian.tahun_akademik_id')
     ->join('mapel', 'mapel.id', '=', 'penilaian.mapel_id')
     ->join('kategori', 'kategori.id', '=', 'penilaian.kategori_id')
     ->join('wali_kelas', 'wali_kelas.id', '=', 'penilaian.wali_kelas_id')
     ->join('kepala_sekolah', 'kepala_sekolah.id', '=', 'penilaian.sekolah_id')
     ->select('penilaian.*', 'siswa.nama', 'siswa.nis', 'siswa.kelas' , 'tahun_akademik.semester', 
     'tahun_akademik.tahun', 'mapel.nama as mapel', 'kategori.nama as kategori','wali_kelas.nama as walas','kepala_sekolah.nama_kepsek as kepsek')
     ->where('penilaian.siswa_id', '=' ,$id)
     ->get();

     //print_r($ar_smp); exit;
     $pdf = PDF::loadView('penilaiansmp.raport',['ar_smp' =>$ar_smp ])
     ->setPaper('f4','portrait');
         //download
         //return $pdf->download('datapegawai.pdf');
         //open di web
     return $pdf->stream();
 
    }
}
