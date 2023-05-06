<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

Route::get('/ping', function(): JsonResponse {
    return response()->json(['Pong' => true]);
});

Route::get('/states', [StatesController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);

Route::post('user/signup', [UserController::class, 'signup']);
Route::post('user/signin', [UserController::class, 'signin']);
Route::get('user/me', [UserController::class, 'me'])->middleware('auth:sanctum');

/**
 * Rota de Utilidade
 * [x] - /ping - Responde com Pong
 *
 *  - Rotas de Autenticação * Autenticação via TOKEN
 * [ ] - /user/signin -- Login
 * [ ] - /user/signup -- Registro do usuário
 * [ ] - /user/me --- Informações do usuário logado
 *
 *
 * Mensagens de erro devem conter:
 * error: Mensagem descritiva do erro, exemplo:
 * {
 *  error:'Usuário inválido'
 * }
 *
 * Sucesso:
 * Deve conter campo 'error' com valor nulo ou vazio, exemplo:
 * {
 *  error:''
 * }
 *
 * - Rotas de configuração geral
 * [x] - /states - Listar os estados
 * [x] - /categories - Listar as categorias do sistema
 * [x] - Criar as seeders para os estados e categorias.
 *
 * - Rotas de Advertises
 * [ ] - /ad/list - Listar todos os anúncios
 * [ ] - /ad/:id  - Dados de um anúncio único
 * [ ] - /ad/add  - Adicionar um novo anúncio
 * [ ] - /ad/:id(PUT) - Alterar um anúncio publicado
 * [ ] - /ad/:id(delete) - Deletar um anúncio
 * [ ] - /ad/:id/:image (Deletar a imagem de um anúncio)
 *
 */
