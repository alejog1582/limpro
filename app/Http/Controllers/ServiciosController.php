<?php

namespace App\Http\Controllers;

class ServiciosController extends Controller {
	public function newServicio() {
		return view('servicios.newservicio');
	}
	public function pagoNewServicio() {
		return view('servicios.pagonewservicio');
	}
	public function confirmacionPagoNewServicio() {
		return view('servicios.confirmacionpagonewservicio');
	}
}
