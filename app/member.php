<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = "member";

    protected $fillable = ['idmember','ktp','name','dob','email'
    ,'phonenumber','address','upline','firstproduct','joindate'];
}
