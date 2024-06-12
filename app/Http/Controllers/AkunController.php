<?php

namespace App\Http\Controllers;

use App\Models\Pelapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function index(Request $request)
    {
        $idPela = Auth::guard('pelapor')->user()->id_pela;
        $pelapor = DB::table('pelapor')->where('id_pela', $idPela)->first();
        return view('akun.index', compact('pelapor'));
    }

    public function akunlist(Request $request)
    {
        $query = Pelapor::query();
        $query->select('pelapor.*');
        $query->orderBy('created_at', 'desc');
        if (!empty($request->nama_pela)) {
            $query->where('nama_pela', 'like', '%' . $request->nama_pela . '%');
        }

        $akun = $query->paginate(10);
        $akun->appends($request->all());
        return view('akun.akun', compact('akun'));
    }
}
