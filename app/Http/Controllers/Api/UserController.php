<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // User Register (POST, formdata)
    public function register(Request $request)
    {

        // Data validation
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "username" => "required|unique:users",
            "password" => "required|confirmed"
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => 'Error Validation', 'message' => $validator->errors()], 400);
        }

        $data = [
            "name" => $request->name,
            "username" => $request->username,
            "role" => 1, // Statically setup role to be super-admin
            "password" => Hash::make($request->password)
        ];

        // User Model
        User::create($data);

        // Response
        return response()->json([
            "message" => "User registered successfully"
        ], 201);
    }
}
