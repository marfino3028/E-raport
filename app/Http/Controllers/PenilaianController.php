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

class PenilaianController extends Controller
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
        ->select('penilaian.*', 'siswa.nis as nis', 'siswa.nama as nama', 'siswa.kelas as kelas')
        ->get();
        return view('penilaian.index', compact('ar_penilaian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('penilaian.form');
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
                'siswa_id'=>$request->siswa,
                'tahun_akademik_id'=>$request->tahun,
                'mapel_id'=>$request->mapel,
                'nilai'=>$request->nilai,
                'kkm'=>$request->kkm,
                'wali_kelas_id'=>$request->walas,
                'rangking'=>$request->rangking
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
        //
    }
    public function pdfsmp()

    {
     $ar_smp = DB::table('penilaian')
     ->join('siswa', 'siswa.id', '=', 'penilaian.siswa_id')
     ->join('tahun_akademik', 'tahun_akademik.id', '=', 'penilaian.siswa_id')
     ->join('mapel', 'mapel.id', '=', 'penilaian.mapel_id')
     ->select('penilaian.*', 'siswa.nama AS nama', 'siswa.nis as nis', 'siswa.kelas as kelas' , 'tahun_akademik.semester as semester', 'tahun_akademik.tahun as tahun', 'mapel.nama as mapel' )
     ->get();
     $pdf = PDF::loadView('penilaian.raport',['ar_smp' =>$ar_smp ] )
     ->setPaper('f4','portrait');
         //download
         //return $pdf->download('datapegawai.pdf');
         //open di web
     return $pdf->stream();
 
    }
}
