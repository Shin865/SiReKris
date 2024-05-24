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
        return view('dashboard.dashboard');
    }

    public function dashboardadmin(){

        $hariini = date('Y-m-d');    
                $rekaplaporan = [
                    'jmllaporan' => 0,
                    'jmlacc' => 0,
                ];
                $rekapakun = [
                    'jmlakun' => 0,
                ];
                $laporan = DB ::table('laporans')
                    ->selectRaw('COUNT(kode_lapor) as jmllaporan, SUM(IF(status="1",1,0)) as jmlacc')
                    ->first();
    
                    $rekaplaporan['jmllaporan'] += $laporan->jmllaporan;
                    $rekaplaporan['jmlacc'] += $laporan->jmlacc;
            
                    $akun = DB::table('pelapor')
                        ->selectRaw('COUNT(id_pela) as jmlakun')
                        ->first();
                    $rekapakun['jmlakun'] += $akun->jmlakun;
            
                return view('dashboard.dashboardadmin', compact('rekaplaporan', 'rekapakun'));
    }

}
