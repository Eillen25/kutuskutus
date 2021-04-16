<?php

namespace App\Http\Controllers;
use Session;
use Alert;
use Mail;

use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function home(){
        // echo "Halo Kamu ngakses Controller Awal pada function index";
        return view('dashboard');
     
    }

}
