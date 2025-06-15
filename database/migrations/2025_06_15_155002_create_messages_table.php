<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('chat_id'); // campo INT UNSIGNED

            $table->foreignId('author_id')->nullable()->constrained('users')->onDelete('set null');
            $table->text('content');
            $table->timestamps();

            $table->softDeletes(); // adiciona o campo deleted_at para soft delete
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
