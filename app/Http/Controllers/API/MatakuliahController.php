<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\QrCode;
use App\Models\relasiModel;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Matakuliah::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function qrCode(Request $request)
    {
        $validatedData = $request->file('image')->store('file-image');
        $data = QrCode::create([
            'qrcode_img' => $validatedData,
        ]);

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function getQrCode($id)
    {
        qrCode::where('qrcode_img', '=', $id)->get();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mendapatkan',
            'qrcode_img' => $id,
        ], 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $uuid = Uuid::uuid4()->toString();
            $matakuliah =  Matakuliah::create([
                'uuid' => $uuid,
                'namaMatakuliah' => $request->namaMatakuliah,
                'jam' => $request->jam,
                'ruangan' => $request->ruangan,
                'tanggalMulai' => $request->tanggalMulai,
                'tanggalSelesai' => $request->tanggalSelesai,
                'jumlahPertemuan' => $request->jumlahPertemuan,
                'kelas' => $request->kelas,
            ]);

            $data = Matakuliah::where('uuid', '=', $matakuliah->uuid)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $data = Matakuliah::where('uuid', '=', $uuid)->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        try {
            Matakuliah::where('uuid', $uuid)->update([
                'namaMatakuliah' => $request->namaMatakuliah,
                'jam' => $request->jam,
                'ruangan' => $request->ruangan,
                'tanggalMulai' => $request->tanggalMulai,
                'tanggalSelesai' => $request->tanggalSelesai,
                'jumlahPertemuan' => $request->jumlahPertemuan,
                'kelas' => $request->kelas,
            ]);

            $data = Matakuliah::where('uuid', '=', $uuid)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed!');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $data =  Matakuliah::destroy($matakuliah->id);

        if ($data) {
            return ApiFormatter::createApi(200, 'Success');
        } else {
            return ApiFormatter::createApi(400, 'Failed!');
        }
    }

    public function indexRelasiModel()
    {
        $data = relasiModel::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function indexDosen()
    {
        $data = Dosen::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
}
