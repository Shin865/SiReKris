<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class BoardingController extends Controller
{
    public function boarding()
    {
        return view('boarding.boarding');
    }

    public function akun()
    {
        return view('boarding.akun');
    }

    public function register(Request $request){
        $nama_pela = $request->nama_pela;
        $email_pela = $request->email_pela;
        $no_hp = $request->no_hp;
        $password = Hash::make($request->password);
        $tgl_daftar = date('Y-m-d');
        $data = array(
            'nama_pela' =>$nama_pela,
            'email_pela' =>$email_pela,
            'no_hp' =>$no_hp,
            'password' =>$password,
            'tgl_daftar' =>$tgl_daftar,
        );
        $simpan = DB::table('pelapor')->insert($data);
        if($simpan){
            return redirect('/login')->with('success','Silahkan login untuk melanjutkan');
        }else{
            return Redirect::back()->with('error','Data gagal disimpan');
        }
    }
}
