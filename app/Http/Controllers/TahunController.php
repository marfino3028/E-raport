<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tahun;
class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_tahun = DB::table('tahun_akademik')->get();
        return view ('tahun.index',
            compact('ar_tahun')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tahun.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tangkap request form
        DB::table('tahun_akademik')->insert(
            [
                'tahun'=>$request->tahun,
                'semester'=>$request->semester
            ]
        );
            //landing page
            return redirect()->route('tahun_akademik.index')

            ->with('success','Data Berhasil Ditambah!');
           return redirect ('/tahun_akademik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_tahun = DB::table('tahun_akademik')
        ->where('tahun_akademik.id', '=', $id)
        ->get();
        return view ('tahun.show',
            compact('ar_tahun')
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
         //hapus data
     DB::table ('tahun_akademik')->where('tahun_akademik.id',$id)->delete();
     //landing page ke halaman pegawai
     return back()->with('success','Data Berhasil Dihapus!');
      return redirect('/tahun_akademik');
    }
}
