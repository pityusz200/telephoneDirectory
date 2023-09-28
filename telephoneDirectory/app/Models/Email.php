<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $id;
    public $email;

    protected $table = 'emails';

    protected $fillable = [
        'id',
        'email',
    ];
}
