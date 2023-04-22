<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signin(): JsonResponse
    {
        return response()->json(['method' => 'signin']);
    }

    public function signup(CreateUserRequest $request): JsonResponse
    {
        return response()->json(['method' =>'signup']);
    }

    public function me(): JsonResponse
    {
        return response()->json(['method' =>'me']);
    }
}
