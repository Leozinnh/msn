<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['chat_id', 'author_id', 'content'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
