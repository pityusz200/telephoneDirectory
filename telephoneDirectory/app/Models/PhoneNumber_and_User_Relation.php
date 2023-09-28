<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber_and_User_Relation extends Model
{
    public $user_id;
    public $phone_number_id;

    protected $table = 'phone_numbers_relative_users';

    protected $fillable = [
        'user_id',
        'phone_number_id',
    ];

}
