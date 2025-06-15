<?php

namespace App\Http\Controllers;

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
        return view('app.index', compact('usuario'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        return response()->json(['success' => true, 'message' => $request->input('message')]);
    }

    public function getMessages(Request $request)
    {
        $request->validate([
            'chat' => 'required|integer',
        ]);

        $chatId = $request->input('chat');

        // Aqui você faria uma consulta real, ex:
        // $messages = Message::where('chat_id', $chatId)->orderBy('created_at')->get();

        // Simulação de mensagens para o chat
        $messages = [
            ['id' => 1, 'author' => "Guest", 'text' => "Mensagem do chat $chatId - Olá!"],
            ['id' => 2, 'author' => "Guest", 'text' => "Mensagem do chat $chatId - Como vai?"],
        ];

        return response()->json(['success' => true, 'messages' => $messages]);
    }
}
