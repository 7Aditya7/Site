<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    protected $fillable = [
        'id','prefix', 'email', 'first_name','last_name','contact_number','address','blood_group','membership_number','formal_photo'
    ];

}
