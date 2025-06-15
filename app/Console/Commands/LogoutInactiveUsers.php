<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;

class LogoutInactiveUsers extends Command
{
    protected $signature = 'users:logout-inactive';
    protected $description = 'Desloga usuários com keepAlive maior que 5 minutos sem atualização';

    public function handle()
    {
        $limite = Carbon::now()->subMinutes(2);

        $usuarios = User::where('keepAlive', '<', $limite)->get();

        foreach ($usuarios as $user) {
            $user->keepAlive = null;
            $user->remember_token = null;
            $user->save();

            \Log::info("Usuário {$user->id} deslogado por inatividade.");
        }

        $this->info(count($usuarios) . ' usuários deslogados.');
    }
}
