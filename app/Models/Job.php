<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $fillable = [
        'id',
        'consultant_id',
        'title',
        'desc',
        'start_date',
        'end_date',

    ];
    protected $hidden=[];

    //relationships


    /////
}
