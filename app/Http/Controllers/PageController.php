<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index(){
        return 'Selamat Datang';
    }  
    
    function about(){
        return 'Nama : Devano Abe <br> NIM : 2141720204';
    }  

    function articel($id){
        return 'Halaman Articel Dengan ID '.$id;
    }  
}
