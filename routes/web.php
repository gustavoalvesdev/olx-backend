<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

Route::get('/ping', function(): JsonResponse {
    return response()->json(['Pong' => true]);
});

Route::get('/states', [StatesController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);

/**
 * Rota de Utilidade
 * [x] - /ping - Responde com Pong
 *
 *  - Rotas de Autenticação * Autenticação via TOKEN
 * [ ] - /user/signin -- Login
 * [ ] - /user/signup -- Registro do usuário
 * [ ] - /user/me --- Informações do usuário logado
 *
 * - Rotas de configuração geral
 * [x] - /states - Listar os estados
 * [x] - /categories - Listar as categorias do sistema
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
