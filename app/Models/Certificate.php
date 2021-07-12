<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{

    protected $table = "certificates";
    protected $fillable = [
        'id',
        'consultant_id',
        'title',
        'desc',
        'photo',

    ];
    protected $hidden=[];

    //relationships


    /////

}
