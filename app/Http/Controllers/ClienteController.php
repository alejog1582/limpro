<?php

namespace App\Http\Controllers;

class ClienteController extends Controller {
	function miCuenta() {
		return view('cliente.micuenta');
	}
	public function selFUncionario() {
		return view('cliente.selfuncionario');
	}
	public function selFuncionarioSave() {
		return view('cliente.selfuncionariosave');
	}
	public function Calificar() {
		return view('cliente.calificar');
	}
	public function calificarNew() {
		return view('cliente.calificarnew');
	}
	public function calificarNewSave() {
		return view('cliente.calificarnewsave');
	}
}
