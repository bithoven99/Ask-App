<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $table = "specializations";
    protected $fillable = [
        'id',
        'title',
        'desc',

    ];
    protected $hidden=[];

    //relationships


    /////



}
