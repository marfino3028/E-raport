<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_profile = DB::table('users')
        ->get();
        return view('profile.index', compact('ar_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_profile = DB::table('users')
        ->get();
        return view('profile.show', compact('ar_profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //data lama yg mau diedit sebanyak 1 baris data
        $dataa = DB::table('users')->where('id',$id)->get();
        return view('profile.form_edit',compact('dataa'));
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
        $validator = Validator::make(request()->all(),[
            'name' => ['required', 'string', 'max:255','min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
        ],[
            'name.required'=>'Nama Wajib Di Isi',
            'name.string'=>'Nama Diwajibkan Huruf String',
            'name.min'=>'Nama Minimal 4 Huruf',
            'email.required'=>'Email Wajib Di Isi',
            'password.required'=>'Password Wajib Di Isi',
            'password.min'=>'Password Minimal 8 Suku Kata',
            'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
            'foto.max' =>'File Foto Melebihi 2048 KB',
        ])->validate();
        if(!empty($request->foto)){
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            $fileName = $request->name.'.jpg';  
            $request->foto->move(public_path('imguser'), $fileName);
        }else{
            $fileName = '';
        }
        DB::table('users')->where('id',$id)->update(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request['password']),
                'foto'=>$fileName,
            ]
        );
        return redirect ('/profile'.'/'.$id);
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
    // 
    }
}
