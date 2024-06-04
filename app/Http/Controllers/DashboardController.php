<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
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

        return view('dashboard.dashboard', compact('rekaplaporan'));
    }

    public function dashboardadmin()
    {

        $hariini = date('Y-m-d');
        $rekaplaporan = [
            'jmllaporan' => 0,
            'jmlacc' => 0,
            'jmltolak' => 0,
            'jmlpending' => 0,
        ];
        $rekapakun = [
            'jmlakun' => 0,
        ];
        $laporan = DB::table('laporans')
            ->selectRaw('COUNT(kode_lapor) as jmllaporan, SUM(IF(status="1",1,0)) as jmlacc, SUM(IF(status="2",1,0)) as jmltolak, SUM(IF(status="0",1,0)) as jmlpending')
            ->first();

        $rekaplaporan['jmllaporan'] += $laporan->jmllaporan;
        $rekaplaporan['jmlacc'] += $laporan->jmlacc;
        $rekaplaporan['jmltolak'] += $laporan->jmltolak;
        $rekaplaporan['jmlpending'] += $laporan->jmlpending;

        $akun = DB::table('pelapor')
            ->selectRaw('COUNT(id_pela) as jmlakun')
            ->first();
        $rekapakun['jmlakun'] += $akun->jmlakun;

        return view('dashboard.dashboardadmin', compact('rekaplaporan', 'rekapakun'));
    }
}
