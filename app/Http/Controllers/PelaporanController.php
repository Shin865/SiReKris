<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class PelaporanController extends Controller
{
    public function index(Request $request)
    {
        $idPela = $request->session()->get('id_pela');
        $query = Pelaporan::query();
        $query->select('laporans.*', 'nama_pela');
        $query->orderBy('tanggal', 'desc');
        $query->leftJoin('pelapor', 'laporans.id_pela', '=', 'pelapor.id_pela');
        $query->where('pelapor.id_pela', $idPela);
        if(!empty($request->bencana)){
            $query->where('bencana','like','%'.$request->bencana.'%');
        }
        if($request->status != ""){
            $query->where('status', $request->status);
        }
        $pelaporan = $query->paginate(5);

        return view('pelaporan.index',compact('pelaporan'));
    }

    public function store(Request $request)
    {
        $idPela = $request->session()->get('id_pela');
        $penanggung = $request->penanggung;
        $alamat = $request->alamat;
        $bencana = $request->bencana;
        $no_hp = $request->no_hp;
        $tanggal = $request->tanggal;
        $deskripsi = $request->deskripsi;
        $status = "0";

        $bulan = date('m', strtotime($tanggal));
        $tahun = date('Y', strtotime($tanggal));
        $thn = substr($tahun, 2, 2,);

        $lastlapor = DB::table('laporans')
        ->whereRaw('MONTH(tanggal) ="'.$bulan.'"')
        ->whereRaw('YEAR(tanggal) ="'.$tahun.'"')
        ->orderBy('kode_lapor', 'desc')
        ->first();
        $lastkodelapor = $lastlapor != null ? $lastlapor->kode_lapor : "";
        $format = "LP".$bulan.$thn;
        $nomor_baru = intval(substr($lastkodelapor, strlen($format))) + 1;
        $nomor_baru_plus_nol = str_pad($nomor_baru, 3, "0", STR_PAD_LEFT);
        $kode = $format . $nomor_baru_plus_nol;
        $kode_lapor = $kode;
        if ($request->hasFile('foto')) {
            $foto = $kode_lapor. "." .$request->file('foto')->getClientOriginalExtension();
        }else{
            $foto = null;
        }
            $data = array(
                'kode_lapor' => $kode_lapor,
                'id_pela' => $idPela,
                'penanggung' => $penanggung,
                'alamat' => $alamat,
                'bencana' => $bencana,
                'no_hp' => $no_hp,
                'tanggal' => $tanggal,
                'deskripsi' => $deskripsi,
                'status' => $status,
                'foto' => $foto
            );
            $simpan = DB::table('laporans')->insert($data);
            if($simpan){
               if($request->hasFile('foto')){
                  $folderPath = "public/uploads/laporan/";
                  $request->file('foto')->storeAs($folderPath, $foto);
               }
               return Redirect::back()->with(['success' => 'Data Berhasil di Simpan']);  
            }else{
                return Redirect::back()->with(['error' => 'Data Gagal di Simpan']);
            }
    }

    public function edit(Request $request){
        $idPela = $request->session()->get('id_pela');
        $kode_lapor = $request->kode_lapor;
        $pelaporan = DB::table('laporans')->where('kode_lapor',$kode_lapor)->first();
        return view('pelaporan.edit',compact('pelaporan'));
    }

    public function update(Request $request ,$kode_lapor){
        $penanggung = $request->penanggung;
        $alamat = $request->alamat;
        $bencana = $request->bencana;
        $no_hp = $request->no_hp;
        $tanggal = $request->tanggal;
        $deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $foto = $kode_lapor. "." .$request->file('foto')->getClientOriginalExtension();
        }else{
            $foto = null;
        }
            $data = array(
                'penanggung' => $penanggung,
                'alamat' => $alamat,
                'bencana' => $bencana,
                'no_hp' => $no_hp,
                'tanggal' => $tanggal,
                'deskripsi' => $deskripsi,
                'foto' => $foto
            );
            try {
                DB::table('laporans')
                ->where('kode_lapor',$kode_lapor)
                ->update($data);
                if($request->hasFile('foto')){
                    $kode_lapor = $kode_lapor . "." .$request->file('foto')->getClientOriginalExtension();
                    $folderPath = "public/uploads/laporan/";
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return Redirect::back()->with(['success' => 'Data Berhasil di Update']);
            }catch(\Exception $e){
                return Redirect::back()->with(['error' => 'Data Gagal di Update']);
            }
    }

    public function delete($kode_lapor){
        $delete = DB::table('laporans')->where('kode_lapor',$kode_lapor)->delete();
        if($delete){
            return Redirect::back()->with(['success' => 'Data Berhasil Terhapus']);
        }else{
            return Redirect::back()->with(['error' => 'Data Gagal Terhapus']);
        }
    }
}
