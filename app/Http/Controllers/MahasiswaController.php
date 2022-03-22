<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class MahasiswaController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'mahasiswa';
    }
    public function index()
    {
        $mahasiswas = $this->database->getReference($this->tablename)->getValue();
        $total_mahasiswa = $reference = $this->database->getReference($this->tablename)->getSnapshot()->numChildren();
        return view('firebase.mahasiswa.index', compact('mahasiswas', 'total_mahasiswa'));
    }
    public function create()
    {
        return view('firebase.mahasiswa.create');
    }
    public function store(Request $request)
    {

        $mahasiswaData = [
            'name' => $request->name,
            'nim' => $request->nim,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
        $mahasiswaRef = $this->database->getReference($this->tablename)->push($mahasiswaData);
        if ($mahasiswaRef) {
            return redirect('mahasiswa')->with('status', 'Data added succesfully');
        } else {
            return redirect('mahasiswa')->with('status', 'Not added succesfully');
        }
    }
    public function edit($id)
    {
        $key = $id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();
        if ($editdata) {
            return view('firebase.mahasiswa.edit', compact('editdata', 'key'));
        } else {
            return redirect('mahasiswa')->with('status', 'Data is Not Found');
        }
    }
    public function update(Request $request, $id)
    {
        $key = $id;
        $updateData = [
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'phone' => $request->phone,

        ];
        $res_updated = $this->database->getReference($this->tablename . '/' . $key)
            ->update($updateData);

        if ($res_updated) {
            return redirect('mahasiswa')->with('status', 'Data Updated Succesfully');
        } else {
            return redirect('mahasiswa')->with('status', 'Data Not Updated');
        }
    }
    public function destroy($id)
    {
        $key = $id;
        $del_data =  $this->database->getReference($this->tablename . '/' . $key)->remove();
        if ($del_data) {
            return redirect('mahasiswa')->with('status', 'Data Deleted Succesfully');
        } else {
            return redirect('mahasiswa')->with('status', 'Data Not Deleted');
        }
    }
}
