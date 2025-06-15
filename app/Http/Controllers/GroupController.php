<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Group;
use App\Models\GroupUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function enterGroup(Request $request)
    {
        $usuario = Auth::user();
        $message = $request->validate([
            'group_id' => 'required|integer'
        ]);

        // verificar se ele já está no grupo
        $existingGroupUser = \App\Models\GroupUser::where('group_id', $message['group_id'])
            ->where('user_id', $usuario->id)
            ->first();
        if ($existingGroupUser) {
            return response()->json(['success' => false, 'message' => 'Você já está neste grupo.']);
        }
        $group = \App\Models\GroupUser::create([
            'group_id' => $message['group_id'],
            'user_id' => $usuario->id
        ]);
        if (!$group) {
            return response()->json(['success' => false, 'message' => 'Não foi possível entrar no grupo.']);
        }

        return response()->json(['success' => true, 'message' => 'Você entrou no grupo com sucesso!']);
    }
}
