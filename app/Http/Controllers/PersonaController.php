<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Redirect,Response,DB,Config;
use Datatables;

class PersonaController extends Controller
{
	function index (){
		return view('ingresar');
	}
	public function store(Request $request){
		//dd($request->lastname);
		//return 'Llego';

		Persona::create(array(
		'name'=> $request->name,
		'lastname'=> $request->lastname,
		'dni'=> $request->dni,
		'telf'=> $request->telf,
		'fechnac'=> $request->fechnac,
		));
	} 

	function vistalista (){
		return view('Persona.listado');
	}

	function listado(request $request){
		$listado= Persona::all();
		//dd($listado);
		//$aux='llego';
		//return view ('Persona.listado', compact('listado','aux'));
        return datatables()->of($listado)
            ->make(true);
	}

	function busqueda($busqdni){
		$buscar=Persona::where('dni','=', $busqdni)->first();
		return view ('Persona.busqueda', compact('buscar'));
	}
}
