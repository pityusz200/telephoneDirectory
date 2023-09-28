<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $id;
    public $name;
    public $email;
    public $phone_number;
    public $address;
    public $mailing_address;

    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'address',
        'mailing_address',
    ];
}
