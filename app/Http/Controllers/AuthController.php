<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index () {

        // Cookie::queue("token_signaal", "ters", 3);

        // if (Cookie::has('token_signaal')) {

        //     $cookieValue = Cookie::get('token_signaal');



        // }

        // $response = Http::post('localhost:3000/auth/login', [
        //     'email' => 'asdds@gmail.com',
        //     'senha' => 'asdds',
        // ]) -> json();

        // return dd($response);

        return view('entrar', [
            // "assuntos" => $assuntosComLicao
        ]);
    }

    public function entrar (LoginRequest $request) {

        $login = $request->getCredentials();

        $response = Http::post('localhost:3000/auth/login', [
            'email' => $login['email'],
            'senha' => $login['senha'],
        ]);

        if ($response->status() == 201) {
            $token = $response->json()['token'];

            Cookie::queue("token_signaal", $token, 60 * 24);
            return redirect()->to('home');

        } else {
            return redirect()->to('entrar')
                ->withErrors(trans('auth.failed'));
        }

        // return dd($response->status());
        // return dd($request->validated());
    }
}
