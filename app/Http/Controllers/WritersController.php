<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escritor;

class WritersController extends Controller
{
     public function writerslista(){
        $listado= Escritor::all();
        //$aux='llego';
        return view ('writerslista', compact('listado'));
    }
}
