<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if (Auth::guard('pelapor')->attempt(['email_pela' => $request->email_pela, 'password' => $request->password])) {
            $pelapor = Auth::guard('pelapor')->user();
            $idPela = $pelapor->id_pela;
            $request->session()->put('id_pela', $idPela);

            return redirect('/dashboard');
        } else {
            return redirect('/login')->with(['warning' => 'Email atau Password salah']);
        }
    }

    public function prosesloginadmin(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email_admin' => $request->email_admin, 'password' => $request->password])) {
            return redirect('/dashboardadmin');
        } else {
            return redirect('/panel')->with(['warning' => 'Email atau Password salah']);
        }
    }

    public function proseslogout()
    {
        if (Auth::guard('pelapor')->check()) {
            Auth::guard('pelapor')->logout();
            return redirect('/login');
        }
    }

    public function proseslogoutadmin()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect('/panel');
        }
    }
}
