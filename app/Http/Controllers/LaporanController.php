<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Pelaporan;

class LaporanController extends Controller
{
    public function laporan(Request $request)
    {
        $query = Pelaporan::query();
        $query->select('laporans.*');
        $query->orderBy('tanggal', 'desc');
        $query->where('status', '1');
        if (!empty($request->dari) && !empty($request->sampai)) {
            $query->whereBetween('tanggal', [$request->dari, $request->sampai]);
        }
        if (!empty($request->bencana)) {
            $query->where('bencana', 'like', '%' . $request->bencana . '%');
        }
        $laporan = $query->paginate(10);
        $laporan->appends($request->all());
        return view('laporan.laporan', compact('laporan'));
    }

    public function cetaklaporan(Request $request)
    {
        $kode_lapor = $request->kode_lapor;
        $laporan = DB::table('laporans')->where('kode_lapor', $kode_lapor)->first();

        if (isset($_POST['exportword'])) {
            $time = date('H:i:s');
            header("Content-type: application/vnd.ms-word");
            header("Content-Disposition: attachment; filename=Laporan " . $kode_lapor . " " . $time . ".doc");
        }
        return view('laporan.cetaklaporan', compact('laporan'));
    }

    public function laporanadmin(Request $request)
    {
        $query = Pelaporan::query();
        $query->select('laporans.*');
        $query->orderBy('tanggal', 'desc');
        $query->where('status', '1');
        if (!empty($request->dari) && !empty($request->sampai)) {
            $query->whereBetween('tanggal', [$request->dari, $request->sampai]);
        }
        if (!empty($request->bencana)) {
            $query->where('bencana', 'like', '%' . $request->bencana . '%');
        }
        $laporan = $query->paginate(10);
        $laporan->appends($request->all());
        return view('laporan.laporanadmin', compact('laporan'));
    }

    public function cetaklaporanadmin(Request $request)
    {
        $kode_lapor = $request->kode_lapor;
        $laporan = DB::table('laporans')->where('kode_lapor', $kode_lapor)->first();
        if (isset($_POST['exportword'])) {
            $time = date('H:i:s');
            header("Content-type: application/vnd.ms-word");
            header("Content-Disposition: attachment; filename=Laporan " . $kode_lapor . " " . $time . ".doc");
        }

        return view('laporan.cetaklaporan', compact('laporan'));
    }

    public function aksi(Request $request)
    {
        $query = Pelaporan::query();
        $query->select('laporans.*', 'nama_pela');
        $query->orderBy('tanggal', 'desc');
        $query->leftJoin('pelapor', 'laporans.id_pela', '=', 'pelapor.id_pela');
        if (!empty($request->bencana)) {
            $query->where('bencana', 'like', '%' . $request->bencana . '%');
        }
        if ($request->status != "") {
            $query->where('status', $request->status);
        }
        $laporan = $query->paginate(5);

        return view('laporan.aksi', compact('laporan'));
    }

    public function approve(Request $request)
    {
        $kode_lapor = $request->kode_aksi_form;
        $status = $request->status;
        $update = DB::table('laporans')->where('kode_lapor', $kode_lapor)->update(['status' => $status]);
        if ($update) {
            return redirect('/aksi')->with(['success' => 'Data Berhasil di Update']);
        } else {
            return redirect('/aksi')->with(['error' => 'Data Gagal di Update']);
        }
    }

    public function batalkan($kode_lapor)
    {
        $update = DB::table('laporans')->where('kode_lapor', $kode_lapor)
            ->update(['status' => 0]);
        if ($update) {
            return redirect('/aksi')->with(['success' => 'Data Berhasil di Update']);
        } else {
            return redirect('/aksi')->with(['error' => 'Data Gagal di Update']);
        }
    }
}
