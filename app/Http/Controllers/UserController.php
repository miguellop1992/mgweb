<?php

namespace App\Http\Controllers;

use App\Exceptions\MGException;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        dd("hola");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function info()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        $user = null;
        try {

            if (!$token = JWTAuth::attempt($credentials)) {
                throw  new MGException("La credencial es invalida", null, null, 401);
            }

            $user = User::where("email", $credentials['email'])->first([DB::raw("CONCAT(firstname,' ',lastname) as name"), "email"]);
            $user['token'] = $token;
        } catch (JWTException $e) {
            throw  new MGException("No se pudo crear el token", null, null, 500);
        }
        return response()->json($user);
    }

}
