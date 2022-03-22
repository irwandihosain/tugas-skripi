<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\RealMatakuliah;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class Masterdata extends Controller
{
    // Kelas
    public function indexKelas()
    {
        return view('dashboard/masterdata/kelas/index', [
            'kelass' => Kelas::all(),
        ]);
    }
    public function createKelas()
    {
        return view('dashboard/masterdata/kelas/create');
    }
    public function storeKelas(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        Kelas::create($validatedData);

        return redirect('kelas')->with('success', 'Kelas baru berhasil ditambahkan');
    }

    public function destroyKelas(Kelas $kelas)
    {
        Kelas::destroy($kelas->id);

        return redirect('/kelas')->with('success', 'Kelas berhasil dihapus');
    }

    // Hari
    public function indexHari()
    {
        return view('dashboard/masterdata/hari/index', [
            'harii' => Hari::all(),
        ]);
    }
    public function createHari()
    {
        return view('dashboard/masterdata/hari/create');
    }
    public function storeHari(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        Hari::create($validatedData);

        return redirect('hari')->with('success', 'Hari baru berhasil ditambahkan');
    }

    public function destroyHari(Hari $hari)
    {
        Hari::destroy($hari->id);

        return redirect('/hari')->with('success', 'Hari berhasil dihapus');
    }

    // fakultas
    public function indexFakultas()
    {
        return view('dashboard/masterdata/fakultas/index', [
            'fakultass' => Fakultas::all(),
        ]);
    }
    public function createfakultas()
    {
        return view('dashboard/masterdata/fakultas/create');
    }
    public function storefakultas(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        Fakultas::create($validatedData);

        return redirect('fakultas')->with('success', 'Fakultas baru berhasil ditambahkan');
    }

    public function destroyfakultas(Fakultas $fakultas)
    {
        Fakultas::destroy($fakultas->id);

        return redirect('/fakultas')->with('success', 'Fakultas berhasil dihapus');
    }

    // Ruangan
    public function indexRuangan()
    {
        return view('dashboard/masterdata/ruangan/index', [
            'ruangann' => Ruangan::all(),
        ]);
    }
    public function createRuangan()
    {
        return view('dashboard/masterdata/ruangan/create');
    }
    public function storeRuangan(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        ruangan::create($validatedData);

        return redirect('ruangan')->with('success', 'ruangan baru berhasil ditambahkan');
    }

    public function destroyRuangan(ruangan $ruangan)
    {
        ruangan::destroy($ruangan->id);

        return redirect('/ruangan')->with('success', 'ruangan berhasil dihapus');
    }

    // namaMatakuliah
    public function indexMatakuliah()
    {
        return view('dashboard/masterdata/namaMatakuliah/index', [
            'Matakuliahh' => RealMatakuliah::all(),
        ]);
    }
    public function createMatakuliah()
    {
        return view('dashboard/masterdata/namaMatakuliah/create');
    }
    public function storeMatakuliah(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        RealMatakuliah::create($validatedData);

        return redirect('namaMatakuliah')->with('success', 'Matakuliah baru berhasil ditambahkan');
    }

    public function destroyMatakuliah(RealMatakuliah $matakuliah)
    {
        // dd($matakuliah);
        RealMatakuliah::destroy($matakuliah->id);

        return redirect('/namaMatakuliah')->with('success', 'Matakuliah berhasil dihapus');
    }
}
