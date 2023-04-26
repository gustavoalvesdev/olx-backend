<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
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

        $data = $request->only(['name', 'email', 'password', 'state_id']);
        $user = User::create($data);

        $response = [
            'error' => '',
            'user' => $user
        ];

        return response()->json($response);
    }

    public function me(): JsonResponse
    {
        return response()->json(['method' =>'me']);
    }
}
