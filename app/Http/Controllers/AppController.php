<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function app()
    {
        $usuario = Auth::user();
        if (!$usuario) {
            return redirect()->route('login');
        }

        // Buscar todos os IDs dos grupos onde o usuário é membro
        $meusGruposIds = \DB::table('group_user')
            ->where('user_id', $usuario->id)
            ->pluck('group_id')
            ->toArray();

        // Buscar todos os grupos
        $grupos = Group::with('owner')
            ->withCount('members')
            ->get();

        // Marcar cada grupo com o campo "is_member"
        foreach ($grupos as $grupo) {
            $grupo['is_member'] = in_array($grupo->id, $meusGruposIds);
        }

        return view('app.index', compact('usuario', 'grupos'));
    }
}
