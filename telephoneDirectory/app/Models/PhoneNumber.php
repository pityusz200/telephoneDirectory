<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    public $id;
    public $phone_number;

    protected $table = 'phone_numbers';

    protected $fillable = [
        'id',
        'phone_number',
    ];
}
