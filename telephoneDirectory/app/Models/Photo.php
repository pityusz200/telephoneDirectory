<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $id;
    public $user_id;
    public $path;

    protected $table = 'photos';

    protected $fillable = [
        'id',
        'user_id',
        'path',
    ];
}
