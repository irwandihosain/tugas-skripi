<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dashboard/dosen/index', [
            'dosens' => Dosen::all(),
        ]);
    }
    public function create()
    {
        return view('dashboard/dosencreate');
    }
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        dosen::create($validatedData);

        return redirect('dosen')->with('success', 'dosen baru berhasil ditambahkan');
    }

    public function destroy(dosen $dosen)
    {
        dosen::destroy($dosen->id);

        return redirect('/dosen')->with('success', 'dosen berhasil dihapus');
    }
}
