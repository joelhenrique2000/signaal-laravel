<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class PrimeiroController extends Controller
{
    public function index () {
        if (Cookie::has('token_signaal')) {

            $token = Cookie::get('token_signaal');

            $responseValidarToken = Http::post('localhost:3000/auth/validate_token', [
                'token' => $token,
            ]);

            if ($responseValidarToken->status() == 201) {
                $response = Http::get('localhost:3000/assunto') -> json();

                $assuntosComLicao = array_map(function ($response) {

                    $assuntoId = $response['id'];
                    $responseLicao = Http::get("localhost:3000/assunto/{$assuntoId}/licao") -> json();

                    $response['licoes'] = array_map(function ($responseLicao) {

                        $licaoId = $responseLicao['id'];
                        $responseLicao['quantidade_exercicios'] = Http::get("localhost:3000/licao/{$licaoId}/quantidade_exercicios") -> json();
                        $responseLicao['quantidade_exercicios_respondidos'] = Http::get("localhost:3000/licao/{$licaoId}/quantidade_exercicios_respondidos") -> json();
                        $responseLicao['licao_concluida'] = $responseLicao['quantidade_exercicios'] == $responseLicao['quantidade_exercicios_respondidos'];

                        return $responseLicao;
                    }, $responseLicao);

                    return $response;
                }, $response);

                return view('home', [
                    "assuntos" => $assuntosComLicao
                ]);
            } else {
                return redirect()->to('entrar');
            }

        } else {
            return redirect()->to('entrar');
        }
    }

    public function pato ($id) {
        $responseLicao = Http::get('localhost:3000/licao') -> json();
        return $responseLicao;
    }
}
