<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function store() 
    {
        echo 'ol';
    }
    
    public function accueil() 
    {
        return view('accueil');
    }


    public function method1($userName) {
        return 'Bonjour ' . $userName;
    }

    public function exemple() 
    {
        return 'Ceci est un exemple';
    }


}
