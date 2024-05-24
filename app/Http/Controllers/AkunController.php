<?php

namespace App\Http\Controllers;

use App\Models\Pelapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index(Request $request)
    {
        $idPela = $request->session()->get('id_pela');
        $pelapor = DB::table('pelapor')->where('id_pela', $idPela)->first();
        return view('akun.index', compact('pelapor'));
    }

    public function updateprofile(Request $request)
    {
        $idPela = $request->session()->get('id_pela');
        $nama_pela = $request->nama_pela;
        $email_pela = $request->email_pela;
        $no_hp = $request->no_hp;
        $password = Hash::make($request->password);
        if(empty($request->password)){
            $data = array(
                'nama_pela' =>$nama_pela,
                'email_pela' =>$email_pela,
                'no_hp' =>$no_hp,
            );
        }else{
            $data = array(
                'nama_pela' =>$nama_pela,
                'email_pela' =>$email_pela,
                'no_hp' =>$no_hp,
                'password' =>$password,
            );
        }
        $update = DB::table('pelapor')->where('id_pela', $idPela)->update($data);
        if($update){
            return Redirect::back()->with(['success' => 'Data Berhasil di Update']);
        }else{
            return Redirect::back()->with(['error' => 'Data Gagal di Update']);
        }
    }
    
    public function akunlist(Request $request)
    {
        $query = Pelapor::query();
        $query->select('pelapor.*');
        $query->orderBy('tgl_daftar', 'desc');
        if(!empty($request->nama_pela)){
            $query->where('nama_pela','like','%'.$request->nama_pela.'%');
        }
        
        $akun = $query->paginate(10);
        $akun->appends($request->all());
        return view('akun.akun',compact ('akun'));
    }
    
    
}
