<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class PerfilController extends Controller
{
    public function index () {
        if (Cookie::has('token_signaal')) {

            $token = Cookie::get('token_signaal');

            $responseValidarToken = Http::post('localhost:3000/auth/validate_token', [
                'token' => $token,
            ]);

            if ($responseValidarToken->status() == 201) {

                $responseUsuario = Http::withToken($token)->get('localhost:3000/auth/usuario') -> json();

                return view('perfil', [
                    "usuario" => $responseUsuario,
                ]);
            } else {
                return redirect()->to('entrar');
            }

        } else {
            return redirect()->to('entrar');
        }
    }
}
