<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class sanctumAuthContoller extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string'
        ]);

        $users = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $users->createToken('myapptoken')->plainTextToken;

        $response = [
            'users' => $users,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $users = User::where('email', $fields['email'])->first();

        // Check password
        if(!$users || !Hash::check($fields['password'], $users->password)) {
            return response([
                'message' => 'wrong password'
            ], 401);
        }

        $token = $users->createToken('myapptoken')->plainTextToken;

        $response = [
            'users' => $users,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
