<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect,Response,DB,Config;
use Datatables;

class UsersController extends Controller
{
     public function index()
    {
        return view('users');
    }
    public function usersList()
    {
        $users = DB::table('users')->select('*');
        return datatables()->of($users)
            ->make(true);
    }
    public function userslista(){
        $listado= User::all();
        //$aux='llego';
        return view ('userslista', compact('listado'));
    }
   
}
