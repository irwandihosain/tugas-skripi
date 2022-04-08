<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $data = $request->validate([
            'nama' => '',
            'email' => '',
            'password' => '',
        ]);

        $user = Dosen::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if ($user) {
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
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $dosen = dosen::where('email', $request->email)->first();

        if (!$dosen || !Hash::check($request->password, $dosen->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak dikenali'
            ], 401);
        }
        $dosen->tokens()->delete();
        $data = $dosen->createToken($request->email)->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'DIkenali',
            'token' => $data,
            'user' => $dosen
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Logout',

        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin(Request $request)
    {
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            $admin = User::where('email', $request->email)->first();
    
            if (!$admin || !Hash::check($request->password, $admin->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Tidak dikenali'
                ], 401);
            }
            $admin->tokens()->delete();
            $data = $admin->createToken($request->email)->plainTextToken;
    
            return response()->json([
                'success' => true,
                'message' => 'DIkenali',
                'token' => $data,
                'user' => $admin
            ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logoutAdmin(Request $request)
    {
        {
            auth()->user()->tokens()->delete();
    
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Logout',
    
            ], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
