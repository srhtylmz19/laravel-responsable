<?php

namespace App\Http\Controllers;

use App\Http\Responses\SalesIndexResponse;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        return new SalesIndexResponse();
    }
}
