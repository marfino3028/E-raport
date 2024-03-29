<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_kategori = DB::table('kategori')->get();
        return view ('kategori.index',
            compact('ar_kategori')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategori.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('kategori')->insert(
            [
                'nama'=>$request->nama
            ]
        );
        return redirect()->route('kategori.index')
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
        $ar_kategori = DB::table('kategori')
        ->where('kategori.id', '=', $id)
        ->get();
        return view ('kategori.show',
            compact('ar_kategori')
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
        $data = Kategori::where('id',$id)->get();
        return view('kategori.form_edit', compact('data'));
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
        DB::table ('kategori')->where('id',$id)->update(
                        [
                'nama'=>$request->nama,
            ]
        );
        return redirect()->route('kategori.index')
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
    DB::table ('kategori')->where('id',$id)->delete();
    return back()->with('success','Data Berhasil Dihapus!');
    return redirect('/kategori');
    }
}
