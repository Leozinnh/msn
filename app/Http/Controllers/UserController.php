<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function keepAlive(Request $request)
    {
        $usuario = \Auth::user();
        if(!$usuario) {
            return response()->json(['error' => 'Usuário não autenticado'], 401);
        }
        $request->validate([
            // '_token' => 'required|csrf_token',
            'page' => 'required|string',
        ]);
        $usuario->keepAlive = now();
        $usuario->page = $request->input('page');
        $usuario->save();

        return response()->json(['success' => true, 'message' => 'Sessão mantida ativa.']);
    }
}
