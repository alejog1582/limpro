<?php

namespace App\Http\Controllers;

class ClienteController extends Controller {
	function miCuenta() {
		return view('cliente.micuenta');
	}
	public function selFuncionarioSave() {
		return view('cliente.selfuncionariosave');
	}
	public function calificarNew() {
		return view('cliente.calificarnew');
	}
	public function calificarNewSave() {
		return view('cliente.calificarnewsave');
	}
}
