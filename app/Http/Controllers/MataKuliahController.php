<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\QrCode;
use App\Models\RealMatakuliah;
use App\Models\relasiModel;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use mysqli;
use Ramsey\Uuid\Uuid;

class MataKuliahController extends Controller
{
    public function index()
    {
        // dd($users);

        return view('dashboard/matakuliah/index', [
            'mata_kuliahs' => Matakuliah::all(),
        ]);
    }
    public function create()
    {
        return view('dashboard/matakuliah/create', [
            'dosens' => Dosen::all(),
            'ruangans' => Ruangan::all(),
            'haris' => Hari::all(),
            'kelass' => Kelas::all(),
            'matakuliahs' => RealMatakuliah::all()
        ]);
    }
    public function store(Request $request)
    {
        // ddd($request);
        $db = mysqli_connect('localhost', 'root', '', 'tugas-skripsi') or die($db);
        // dd($request);
        $date = $request->tanggalMulai;
        $date1 = strtotime($date);
        $tanggal1 = date('d-m-Y', $date1);

        $tanggalselesai1 = $request->tanggalSelesai;
        $tanggalselesai2 = strtotime($tanggalselesai1);
        $tanggalSelesai1 = date('d-m-Y', $tanggalselesai2);

        $uuid = Uuid::uuid4()->toString();
        // dd($uuid);

        // $validatedData = $request->validate([
        //     'kodeDosen' => '',
        //     'namaMatakuliah' => '',
        //     'jam' => '',
        //     'ruangan' => '',
        //     'tanggalMulai' => '',
        //     'tanggalSelesai' => '',
        //     'jumlahPertemuan' => '',
        //     'kelas' => '',
        // ]);

        $validatedData = $request->file('image')->store('file-image');

        Matakuliah::create([
            'uuid' => $uuid,
            'namaMatakuliah' => $request->namaMatakuliah,
            'jam' => $request->jam,
            'ruangan' => $request->ruangan,
            'tanggalMulai' => $request->tanggalMulai,
            'tanggalSelesai' => $request->tanggalSelesai,
            'jumlahPertemuan' => $request->jumlahPertemuan,
            'kelas' => $request->kelas,
        ]);

        QrCode::create([
            'qrcode_img' => $validatedData,
            'id_daftarMahasiswa' => 1
        ]);

        $dosen_ids = $request->dosen_id;
        $matakuliah_id = $uuid;

        foreach ($dosen_ids as $dosen_id) {
            relasiModel::create([
                'dosen_id' => $dosen_id,
                'matakuliah_id' => $matakuliah_id,
            ]);
        }
        // dd($updatedData);
        // $validatedData['user_id'] = auth()->user()->id;

        return redirect('mata-kuliah')->with('toast_success', 'Jadwal baru telah dibuat');
    }
    public function edit(Matakuliah $matakuliah)
    {
        return view('dashboard/matakuliah/edit', [
            'editdata' => $matakuliah,
            'dosens' => Dosen::all(),
            'ruangans' => Ruangan::all(),
            'haris' => Hari::all(),
            'kelass' => Kelas::all(),
            'namaMatakuliahh' => RealMatakuliah::all()
        ]);
    }
    public function update(Request $request, Matakuliah $matakuliah)
    {
        // dd($request);
        $date = $request->tanggalMulai;
        $date1 = strtotime($date);
        $tanggal1 = date('d-m-Y', $date1);

        $tanggalselesai1 = $request->tanggalSelesai;
        $tanggalselesai2 = strtotime($tanggalselesai1);
        $tanggalSelesai1 = date('d-m-Y', $tanggalselesai2);

        $uuid = Uuid::uuid4()->toString();

        Matakuliah::where('uuid', $matakuliah->uuid)
            ->update([
                'uuid' => $uuid,
                'namaMatakuliah' => $request->namaMatakuliah,
                'jam' => $request->jam,
                'ruangan' => $request->ruangan,
                'tanggalMulai' => $request->tanggalMulai,
                'tanggalSelesai' => $request->tanggalSelesai,
                'jumlahPertemuan' => $request->jumlahPertemuan,
                'kelas' => $request->kelas,
            ]);

        $dosen_ids = $request->dosen;

        foreach ($dosen_ids as $dosen_id) {
            relasiModel::create([
                'dosen_id' => $dosen_id,
                'matakuliah_id' => $uuid,
            ]);
        }
        return redirect('mata-kuliah')->with('toast_success', 'Jadwal berhasil diperbaharui');
    }
    public function destroy(Matakuliah $matakuliah,)
    {
        Matakuliah::destroy($matakuliah->id);

        return redirect('mata-kuliah')->with('toast_warning', 'Data Deleted Succesfellu');
    }
    public function show($key)
    {
        $id = $key;
        // dd($mahasiswas);
        return view('dashboard.matakuliah.show', [
            'id' => $id,
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }
    public function tambah($id)
    {

        // ddd($cekDaftarMahasiswa, $daftarMahasiswa, $length);


        // dump($)
        return view('dashboard.matakuliah.mahasiswa.create', [
            'id' => $id,
        ]);
    }
    public function gudang(Request $request, $id)
    {
        // dd($id);
        // $cekDaftarMahasiswa = $this->database->getReference('daftarMahasiswa' . '/' . $id)->getSnapshot()->exists();

        // if ($cekDaftarMahasiswa == true) {
        //     $daftarMahasiswa = $this->database->getReference('daftarMahasiswa' . '/' . $id)->getValue();
        //     // foreach ($daftarMahasiswa as $key) {
        //     $length = count($daftarMahasiswa);

        //     $matakliahRef = $this->database->getReference('daftarMahasiswa' . '/' . $id)->getChild($length)->set([
        //         'nama' => $request->nama,
        //         'nim' => (float)$request->nim,
        //     ]);
        // } else {
        //     $matakliahRef = $this->database->getReference('daftarMahasiswa' . '/' . $id)->getChild(0)->set([
        //         'nama' => $request->nama,
        //         'nim' => (float)$request->nim,
        //     ]);
        // }

        // if ($matakliahRef) {
        //     return redirect('mata-kuliah')->with('success', 'Mahasiswa berhasil ditambahkan');
        // } else {
        //     return redirect('mata-kuliah')->with('warning', 'Mahasiswa gagal di tambahkan');
        // }
        $matakliahRef = Mahasiswa::create([
            'matakuliah_id' => $id,
            'nama' => $request->nama,
            'nim' => $request->nim,

        ]);
        if ($matakliahRef) {
            return redirect('show-matakuliah/' . $id)->with('toast_success', 'Mahasiswa berhasil ditambahkan');
        } else {
            return redirect('show-matakuliah/' . $id)->with('toast_warning', 'Mahasiswa gagal di tambahkan');
        }
    }

    public function hancurkan(Mahasiswa $mahasiswa, $id)
    {
        // dd($mahasiswa);
        // dd($id);
        mahasiswa::destroy($mahasiswa->id);

        return redirect('show-matakuliah/' . $id)->with('toast_success', 'Mahasiswa berhasil dihapus');
    }

    public function mengubah($id, $bid)
    {
        $key = $id;
        $id2 = $bid;
        $editdata = $this->database->getReference('daftarMahasiswa' . '/' . $id2 . '/' . $key)->getValue();
        if ($editdata) {
            return view('dashboard.matakuliah.mahasiswa.edit', compact('editdata', 'key', 'id2'));
        } else {
            return redirect('mata-kuliah')->with('toast_warning', 'Data is Not Found');
        }
    }
    public function mengupdate(Request $request, $id, $id2)
    {
        $key = $id;
        $id2 = $id2;
        $updateData = [
            'nama' => $request->nama,
            'nim' => (float)$request->nim,
        ];
        $res_updated = $this->database->getReference('daftarMahasiswa' . '/' . $id2 . '/' . $key)
            ->update($updateData);

        if ($res_updated) {
            return redirect('mata-kuliah')->with('toast_success', 'Data Updated Succesfully');
        } else {
            return redirect('mata-kuliah')->with('toast_success', 'Data Not Updated');
        }
    }
}
