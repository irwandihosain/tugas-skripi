<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Contract\Database;
use Illuminate\Http\Request;

class daftarDosen extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'dosen';
    }
    public function index($key)
    {
        $id = $key;
        $mata_kuliahs = $this->database->getReference('Matakuliah' . '/' . $id . '/' . 'dosen')->getValue();
        // dd($mata_kuliahs);
        return view('dashboard.daftarDosen.index', compact('mata_kuliahs', 'id'));
    }
    public function create($id)
    {
        $mata_kuliahs = $this->database->getReference('dosen')->getValue();
        // dd($mata_kuliahs);
        return view('dashboard.daftarDosen.create', compact('mata_kuliahs', 'id'));
    }
    public function store(Request $request, $id)
    {
        // dd($request);
        $matakuliahData = [
            'nama' => $request->nama,
            'uid' => $request->uid,
        ];
        // dd($matakuliahData);
        $matakliahRef = $this->database->getReference('Matakuliah' . '/' . $id . '/' . 'dosen')->push($matakuliahData);
        if ($matakliahRef) {
            return redirect('mata-kuliah')->with('success', 'Dosen berhasil ditambahkan');
        } else {
            return redirect('mata-kuliah')->with('warning', 'Dosen gagal di tambahkan');
        }
    }
    public function destroy($id, $id2)
    {
        $del_data =  $this->database->getReference('Matakuliah' . '/' . $id2 . '/' . 'dosen' . '/' . $id)->remove();
        if ($del_data) {
            return redirect('mata-kuliah')->with('success', 'Data Deleted Succesfully');
        } else {
            return redirect('mata-kuliah')->with('warning', 'Data Not Deleted');
        }
    }
    public function edit($id, $bid)
    {
        // dd($bid);
        $key = $id;
        $id2 = $bid;
        $editdata = $this->database->getReference('Matakuliah' . '/' . $id2 . '/' . 'dosen' . '/' . $key)->getValue();
        $dosens = $this->database->getReference('dosen')->getValue();
        if ($editdata) {
            return view('dashboard.daftarDosen.edit', compact('dosens', 'editdata', 'key', 'id2'));
        } else {
            return redirect('mata-kuliah')->with('warning', 'Data is Not Found');
        }
    }
    public function update(Request $request, $id, $id2)
    {
        $key = $id;
        $id2 = $id2;
        $updateData = [
            'nama' => $request->nama,
            'uid' => $request->uid,
        ];
        $res_updated = $this->database->getReference('Matakuliah' . '/' . $id2 . '/' . 'dosen' . '/' . $key)
            ->update($updateData);

        if ($res_updated) {
            return redirect('mata-kuliah')->with('success', 'Data Updated Succesfully');
        } else {
            return redirect('mata-kuliah')->with('success', 'Data Not Updated');
        }
    }
}
