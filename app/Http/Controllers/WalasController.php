<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Walas;

class WalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_walas = DB::table('wali_kelas')
        ->join('kategori', 'kategori.id', '=', 'wali_kelas.kategori_id')
        ->select('wali_kelas.*', 'kategori.nama AS jenis')
        ->get();
        return view('walas.index', compact('ar_walas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('walas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('wali_kelas')
        ->join('kategori', 'kategori.id', '=', 'wali_kelas.kategori_id')
        ->select('wali_kelas.*','kategori.nama AS jenis')
        ->insert(
            [
                'nip'=>$request->nip,
                'nama'=>$request->nama,
                'kategori_id'=>$request->kategori
            ]
        );
        //landing page
        return redirect()->route('walas.index')
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
        $ar_walas = DB::table('wali_kelas')
        ->join('kategori', 'kategori.id', '=', 'wali_kelas.kategori_id')
        ->select('wali_kelas.*', 'kategori.nama AS jenis')
        ->where('wali_kelas.id', '=', $id)
        ->get();
        return view('walas.show', compact('ar_walas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Walas::where('id',$id)->get();
        return view('walas.form_edit', compact('data'));
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
        DB::table ('wali_kelas')->where('id',$id)->update(
            [
                'nip'=>$request->nip,
                'nama'=>$request->nama,
                'kategori_id'=>$request->kategori
            ]
        );
            return redirect()->route('walas.index')
    
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
         DB::table ('wali_kelas')->where('id',$id)->delete();
           return back()->with('success','Data Berhasil Dihapus!');
           return redirect('/walas');
    }
}
