<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

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
		'dni'=> $request->dni
		));
	} 
	function listado(request $request){
		$listado= Persona::all();
		//dd($listado);
		$aux='llego';
		return view ('Persona.listado', compact('listado','aux'));
	}
	function busqueda($busqdni){
		$buscar=Persona::where('dni','=', $busqdni)->first();
		return view ('Persona.busqueda', compact('buscar'));
	}
}
