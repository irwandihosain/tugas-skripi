<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class history extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'Matakuliah';
    }
    public function index()
    {
        $absensii = $this->database->getReference('Matakuliah')->getValue();
        // dd($absensii);
        return view('dashboard.history.index', compact('absensii'));
    }
    public function show($id)
    {
        $bid = $id;
        $absensiMahasiswas = $this->database->getReference('daftarPresensi' . '/' . $id)->getValue();
        $pertemuans = $this->database->getReference('pertemuan')->getValue();
        // dd($absensiMahasiswas);
        return view('dashboard.history.show', compact('absensiMahasiswas', 'pertemuans', 'bid'));
    }
    public function lihat($id, $key)
    {
        // dd($key);
        $pertemuanMahasiswas = $this->database->getReference('daftarPresensi' . '/' . $key . '/' . $id)->getValue();
        // dd($absensii);
        return view('dashboard.history.lihat', compact('pertemuanMahasiswas'));
    }
}
