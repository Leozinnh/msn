<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupUser extends Pivot
{
    use HasFactory;

    protected $table = 'group_user';

    protected $fillable = [
        'group_id',
        'user_id',
    ];
}
