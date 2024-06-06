<?php

namespace App\Http\Controllers;

use App\Models\Pelapor;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = Pelapor::where('google_id', $google_user->getId())->first();
            if (!$user) {
                $newUser = Pelapor::create([
                    'nama_pela' => $google_user->getName(),
                    'email_pela' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);

                Auth::guard('pelapor')->login($newUser, true);
                return redirect()->intended('/dashboard');
            } else {
                Auth::guard('pelapor')->login($user, true);
                return redirect()->intended('/dashboard');
            }
        } catch (\Throwable $th) {
           dd('something wrong '. $th->getMessage());
        }
    }

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
