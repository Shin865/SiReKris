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
        $rekaplaporan = [
            'jmllaporan' => 0,
            'jmlacc' => 0,
            'jmltolak' => 0,
        ];
        $laporan = DB::table('laporans')
            ->selectRaw('COUNT(kode_lapor) as jmllaporan, SUM(IF(status="1",1,0)) as jmlacc, SUM(IF(status="2",1,0)) as jmltolak')
            ->first();

        $rekaplaporan['jmllaporan'] += $laporan->jmllaporan;
        $rekaplaporan['jmlacc'] += $laporan->jmlacc;
        $rekaplaporan['jmltolak'] += $laporan->jmltolak;

        return view('boarding.boarding', compact('rekaplaporan'));
    }

    public function akun()
    {
        return view('boarding.akun');
    }

    public function register(Request $request)
    {
        $nama_pela = $request->nama_pela;
        $email_pela = $request->email_pela;
        $password = Hash::make($request->password);
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        $data = array(
            'nama_pela' => $nama_pela,
            'email_pela' => $email_pela,
            'password' => $password,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        );
        $simpan = DB::table('pelapor')->insert($data);
        if ($simpan) {
            return redirect('/login')->with('success', 'Silahkan login untuk melanjutkan');
        } else {
            return Redirect::back()->with('error', 'Data gagal disimpan');
        }
    }
}
