<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    protected $table = "consults";
    protected $fillable = [
        'id',
        'title',
        'desc',
        'client_id',
        'consultant_id',
        'room_id',
        'rating',
        'statue',
        'password',
        'photo',
        'statue'

    ];
    protected $hidden=[];


    //relationships


    /////
}
