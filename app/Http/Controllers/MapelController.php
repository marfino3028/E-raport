<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mapel;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_mapel = DB::table('mapel')
        ->join('guru', 'guru.id', '=', 'mapel.guru_id')
        ->join('kategori', 'kategori.id', '=', 'mapel.kategori_id')
        ->select('mapel.*', 'guru.nama AS pengajar', 'kategori.nama AS jenis')
        ->get();
        return view('mapel.index', compact('ar_mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mapel.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('mapel')
        ->join('guru', 'guru.id', '=', 'mapel.guru_id')
        ->join('kategori', 'kategori.id', '=', 'mapel.kategori_id')
        ->select('mapel.*', 'guru.nama AS pengajar', 'kategori.nama AS jenis')
        ->insert(
           [
               'nama'=>$request->nama,
               'guru_id'=>$request->guru,
               'kategori_id'=>$request->kategori
           ]
       );
           //landing page
           return redirect()->route('mapel.index')
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
        $ar_mapel = DB::table('mapel')
        ->where('mapel.id', '=', $id)
        ->get();
        return view ('mapel.show',
            compact('ar_mapel')
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
        $data = mapel::where('id',$id)->get();
        return view('mapel.form_edit', compact('data'));
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
        DB::table ('mapel')->where('id',$id)->update(
                [
                'nama'=>$request->nama,
                ]
        );
        //landing page
        return redirect()->route('mapel.index')
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
    DB::table ('mapel')->where('id',$id)->delete();
       return back()->with('success','Data Berhasil Dihapus!');
       return redirect('/mapel');
    }
}
