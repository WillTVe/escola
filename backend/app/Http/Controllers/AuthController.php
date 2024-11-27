<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request) {
        try {
            //Validation
            $validateUser = Validator::make($request->all(),
            [
               'name'   => 'required',
               'email'  => 'required|email|unique:users,email',
               'password'   => 'required|min:5|max:12' 
            ]);

            if ($validateUser->fails()){
                return response()->json([
                    'status'    => false,
                    'message'   => 'validation error',
                    'errors'    => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name'  => $request->name,
                'email' => $request->email,
                'password'  => Hash::make($request->password)
            ]);

            return response()->json([
                'status'    => true,
                'message'   => 'User Created Successfully',
                'token' => $user->createToken("api_token")->plainTextToken
            ], 200);
        } catch(\Throwable $e) {
            return response()->json([
                'status'    => false,
                'message'   => $e->getMessage()
            ], 500);
        }
    }

    public function login(Request $request){
        return response()->json([
            'status'    => true
        ]);
    }
}
