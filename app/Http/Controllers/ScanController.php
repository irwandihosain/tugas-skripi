<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ScanController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'mahasiswa';
    }
    public function index()
    {
        return view('scan');
    }
    public function store(Request $request)
    {
        $mahasiswaNim = [
            'mhsnim' => $request->nim,
        ];
        $mahasiswaNim = $this->database->getReference($this->tablename)->push($mahasiswaNim);
        if ($mahasiswaNim) {
            return redirect('scan')->with('status', 'Qrcode added succesfully');
        } else {
            return redirect('scan')->with('status', 'Not added succesfully');
        }
    }
}
