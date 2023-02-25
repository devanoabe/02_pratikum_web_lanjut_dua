<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticelController extends Controller
{
    //
    function articel($id){
        return 'Halaman Articel Dengan ID '.$id;
    }  
}
