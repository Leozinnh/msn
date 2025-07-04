<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    private function gerarUsernameComEmoji(string $nome): string
    {
        // Lista simples de emojis para usar
        $emojis = ['😎', '🔥', '🚀', '✨', '😃', '🐱', '🌟', '🎯', '🍀', '🦄'];

        // Remove espaços, deixa tudo minúsculo e tira caracteres especiais
        $usernameBase = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $nome));

        // Pega um emoji aleatório da lista
        $emoji = $emojis[array_rand($emojis)];

        // Gera um número aleatório entre 10 e 99 para deixar único
        $numero = rand(10, 99);

        // Monta o username final
        return $usernameBase . $numero . $emoji;
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'remember' => ['nullable'],
        ]);

        $credentials = [
            'email' => $validated['email'],
            'password' => $validated['password'],
        ];

        $remember = ($request->has('remember') && $request->input('remember') == 'on');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $user->keepAlive = now();
            $user->save();

            return redirect()->intended('/app');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'As credenciais estão incorretas.',
        ])->withInput();
    }


    public function register(Request $request)
    {
        try {
            $credentials = $request->validate([
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:6'],
                'avatar' => ['required'],
                'terms' => ['required']
            ]);

            $username = $this->gerarUsernameComEmoji($credentials['name']);

            // Cria o usuário
            $usuario = \App\Models\User::create([
                'name' => $credentials['name'],
                'username' => $username,  // Gera o username com emoji
                'email' => $credentials['email'],
                'password' => bcrypt($credentials['password']),  // criptografa a senha
                'foto' => $credentials['avatar']
            ]);
            // verificar se criou o usuário com sucesso
            if (!$usuario) {
                return redirect()->route('login')->withErrors([
                    'register' => 'Não foi possível registrar o usuário. Tente novamente.',
                ])->withInput();
            }

            // Retorna para a tela de registro com mensagem de sucesso
            return redirect('/auth')->with('message', 'Registro realizado com sucesso!');
        } catch (Exception $e) {
            if ($e->getCode() === 0) { // Erro de duplicidade
                return redirect()->route('login')->withErrors([
                    'email' => 'Este e-mail já está cadastrado.',
                ])->withInput();
            } else {
                return redirect()->route('login')->withErrors([
                    'register' => 'Não foi possível registrar o usuário. Verifique os dados e tente novamente.',
                ])->withInput();
            }
        }
    }

    public function logout(Request $request)
    {
        // Limpa o campo keepAlive do usuário
        if (Auth::check()) {
            $user = Auth::user();
            $user->keepAlive = null;
            $user->remember_token = null;
            $user->save();
            Auth::logout();
        }
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    }
}
