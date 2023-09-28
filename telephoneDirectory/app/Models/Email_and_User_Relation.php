<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email_and_User_Relation extends Model
{
    public $user_id;
    public $email_id;

    protected $table = 'emails_relative_users';

    protected $fillable = [
        'user_id',
        'email_id',
    ];
}
