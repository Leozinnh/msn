<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('photo')->nullable()->default('persons.jpeg');
            $table->unsignedBigInteger('owner_id');
            $table->boolean('is_private')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Desabilita as foreign keys temporariamente
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Inserindo grupo padrão
        DB::table('groups')->insert([
            'name' => 'Todos',
            'description' => 'Grupo Geral',
            'owner_id' => 1,   // Mesmo que o usuário ainda não exista
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Reabilita as foreign keys
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
}
