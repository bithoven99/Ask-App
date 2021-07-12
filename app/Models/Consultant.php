<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $table = "consultants";
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'country',
        'email',
        'bio',
        'current_job',
        'email',
        'password',
        'photo',
        'statue'

    ];
    protected $hidden=[];


    //relationships


    /////
}
