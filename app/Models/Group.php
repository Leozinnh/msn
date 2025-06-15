<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;  // ← Importante
    /**
     * Nome da tabela
     */
    protected $table = 'groups';

    protected $fillable = [
        'name',
        'description',
        'photo',
        'owner_id',
        'is_private',
    ];

    /**
     * Dono/criador do grupo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * Relacionamento para membros (se for usar no futuro)
     */
    public function members()
    {
        return $this->belongsToMany(User::class, 'group_user', 'group_id', 'user_id')->withTimestamps();
    }
}
