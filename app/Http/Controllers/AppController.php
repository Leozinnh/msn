<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
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
        $usuario = Auth::user();
        $message = $request->validate([
            'chat_id' => 'nullable|integer',
            'message' => 'required|string',
        ]);

        $msg = \App\Models\Message::create([
            'chat_id' => $request->input('chat', 1), // Default chat ID
            'author_id' => $usuario->id,
            'content' => $message['message'],
        ]);
        if (!$msg) {
            return response()->json(['success' => false, 'message' => 'Erro ao enviar a mensagem.']);
        }

        return response()->json(['success' => true, 'message' => $message['message']]);
    }

    public function getMessages(Request $request)
    {
        $request->validate([
            'chat' => 'required|integer',
        ]);

        $chatId = $request->input('chat', 1);

        $messages = Message::with('author')
            ->where('chat_id', $chatId)
            ->orderBy('created_at')
            ->limit(100)
            ->get();

        $authUserId = Auth::id();

        $messagesArray = $messages->map(function ($msg) use ($authUserId) {
            $usuario = $msg->author;

            if (!$usuario || !$usuario->name) {
                $author = "Desconhecido";
            } else {
                $author = ($msg->author_id == $authUserId) ? 'Você' : ($usuario->username ?? $usuario->name);
            }

            return [
                'id' => $msg->id,
                'author' => $author,
                'text' => $msg->content,
                // 'status' => ($usuario->keepAlive && $usuario->keepAlive->diffInMinutes(now()) < 5) ? 'on' : 'off',
                'status' => ($usuario->keepAlive) ? 'on' : 'off',
            ];
        });

        return response()->json(['success' => true, 'messages' => $messagesArray]);
    }
}
