<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersCreate extends Model
{
    use HasFactory;

    protected $table = 'users_list';
    protected $fillable = [
        'title',
        'body',
        'file_name',
        'file_path'
    ];
}
