<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'|''
        ])

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
