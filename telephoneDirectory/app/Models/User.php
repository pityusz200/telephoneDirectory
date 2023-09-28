<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $id;
    public $fname;
    public $lname;
    public $email;
    public $phone_number;
    public $address;
    public $mailing_address;

    protected $table = 'users';

    protected $fillable = [
        'id',
        'fname',
        'lname',
        'address',
        'mailing_address',
    ];

    protected $relations = [
        'phone_number_id',
        'email_id',
    ];
    public function phoneNumber()
    {
        return $this->belongsToMany('App\Models\PhoneNumber', 'App\Models\PhoneNumber_and_User_Relation','user_id');
    }

    public function email()
    {
        return $this->belongsToMany('App\Models\Email', 'App\Models\Email_and_User_Relation','user_id');
    }
}
