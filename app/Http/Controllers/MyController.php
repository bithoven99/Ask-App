<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
       $client= Client::all();
       return $client;
    }
}
