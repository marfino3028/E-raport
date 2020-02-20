<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator,File,Redirect,Response;

class KelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_user = DB::table('users')->get();
        return view('user.index', compact('ar_user'));
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
        if(!empty($request->foto)){
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->email.'.jpg';   
            $request->foto->move(public_path('imguser'), $fileName);
        }else{
            $fileName = '';
        } 
        DB::table('users')->insert(
            [
                'name'=>$request->nama,
                'email'=>$request->email,
                'password'=>Hash::make($request['password']),
                'role'=>$request->role,
                'foto'=>$fileName
            ]
        );
        return redirect ('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_user = DB::table('users')
        ->select('users.*')
        ->where('users.id', '=', $id)
        ->get();
        return view('user.show', compact('ar_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('users')->where('id',$id)->get();
        return view('user/form_edit',compact('data'));
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
            'role'=>['required'],
            'foto' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
        ],[
            'name.required'=>'Nama Wajib Di Isi',
            'name.string'=>'Nama Diwajibkan Huruf String',
            'name.min'=>'Nama Minimal 4 Huruf',
            'email.required'=>'Email Wajib Di Isi',
            'password.required'=>'Password Wajib Di Isi',
            'password.min'=>'Password Minimal 8 Suku Kata',
            'role.required'=>'Role Wajib Diisi',
            'foto.image'=>'Ektensi File Foto Hanya Boleh .jpg, .png, .gif',
            'foto.max' =>'File Foto Melebihi 2048 KB',
        ])->validate();
        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
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
                'role'=>$request->role,
                'foto'=>$fileName,
            ]
        );
        return redirect ('/user'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = DB::table('users')->select('foto')
                ->where('id','=',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        File::delete(public_path('imguser/'.$namaFile));
        DB::table('users')->where('id',$id)->delete();
        return redirect ('/user');
    }
}
