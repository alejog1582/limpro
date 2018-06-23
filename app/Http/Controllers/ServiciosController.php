<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewServicioRequest;

class ServiciosController extends Controller {
	public function newServicio(NewServicioRequest $request) {
		$fecha_seleccionada = $request->fecha_servicio;
		return view('servicios.newservicio', [
			'fecha_seleccionada' => $fecha_seleccionada,
		]);
	}
	public function pagoNewServicio() {
		return view('servicios.pagonewservicio');
	}
	public function confirmacionPagoNewServicio() {
		return view('servicios.confirmacionpagonewservicio');
	}
}
