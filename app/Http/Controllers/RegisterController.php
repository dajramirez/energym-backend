<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required' | 'string' | 'max:255',
            'surname' => 'required' | 'string' | 'max:255',
            'username' => 'requiered' | 'string' | 'max:255' | 'unique:users',
            'email' => 'required' | 'string' | 'email' | 'max:255' | 'unique:users',
            'role' => 'requiered' | 'string' | 'in:user,trainer,clerk,admin',
            'password' => 'required' | 'string' | 'min:8' | 'confirmed',
            'password_confirmation' => 'required' | 'string' | 'min:8',
        ]);

        if ($request->password !== $request->password_confirmation) {
            return response()->json([
                "success" => false,
                "message" => "Las contraseñas no coinciden.",
            ], 422);
        }

        $request->merge([
            'password' => bcrypt($request->password),
        ]);

        $user = User::create($request->all());

        if ($user) {
            return response()->json([
                "success" => true,
                "message" => "Usuario guardado con éxito."
            ]);
        }

        return response()->json([
            "success" => false,
            "message" => "El correo electrónico ya está en uso."
        ]);
    }
}
