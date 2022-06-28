<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class ExercicioController extends Controller
{
    public function index ($licaoId) {
        if (Cookie::has('token_signaal')) {

            $token = Cookie::get('token_signaal');

            $responseValidarToken = Http::post('localhost:3000/auth/validate_token', [
                'token' => $token,
            ]);

            if ($responseValidarToken->status() == 201) {

                $quantidade_exercicios = Http::get("localhost:3000/licao/{$licaoId}/quantidade_exercicios") -> json();
                $quantidade_exercicios_respondidos = Http::get("localhost:3000/licao/{$licaoId}/quantidade_exercicios_respondidos") -> json();
                $porcentagem_exercicios_respondidos = Http::get("localhost:3000/licao/{$licaoId}/porcentagem_exercicios_respondidos") -> json();
                $licao_concluida = $quantidade_exercicios == $quantidade_exercicios_respondidos;

                if ($licao_concluida) {
                    return redirect()->to('/');
                }

                $responseExercicio = Http::get("localhost:3000/licao/{$licaoId}/exercicio_disponivel") -> json();

                return view('exercicio', [
                    "quantidade_exercicios" => $quantidade_exercicios,
                    "quantidade_exercicios_respondidos" => $quantidade_exercicios_respondidos,
                    "porcentagem_exercicios_respondidos" => $porcentagem_exercicios_respondidos,
                    "licao_concluida" => $licao_concluida,
                    "exercicio" => $responseExercicio
                ]);
            } else {
                return redirect()->to('entrar');
            }

        } else {
            return redirect()->to('entrar');
        }
    }


    public function cadastrarResposta($id) {

        if (Cookie::has('token_signaal')) {

            $token = Cookie::get('token_signaal');

            $responseValidarToken = Http::post('localhost:3000/auth/validate_token', [
                'token' => $token,
            ]);

            if ($responseValidarToken->status() == 201) {

                $responseResposta = Http::withToken($token)->post('localhost:3000/responder-exercicio/responder', [
                    'repostaId' => $id,
                ]) -> json();

                return $responseResposta;


            } else {
                return redirect()->to('entrar');
            }

        } else {
            return redirect()->to('entrar');
        }

        return $id;
    }

}
