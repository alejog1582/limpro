<?php

namespace App\Http\Controllers;

use App\Calificacione;
use App\Servicio;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$user = \Auth::user();
		$servicios = Servicio::all();
		$calificaciones = Calificacione::all();
		$canje_4 = null;
		$canje_8 = null;
		$activos = false;
		$historial = false;
		foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->estado != 'cancelado') {
					if ($servicio->id_calificacion == null) {
						$activos = true;
					}
				}
			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->estado != 'cancelado') {
					if ($servicio->id_calificacion != null) {
						$historial = true;
					}
				}
			}
		}

		foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->id_calificacion != null) {
					if ($servicio->canje == 'no') {
						if ($servicio->plan == '4') {
							$canje_4 = $canje_4 + 1;
						}
						if ($servicio->plan == '8') {
							$canje_8 = $canje_8 + 1;
						}
					}
				}
			}
		}
		return view('home', [
			'user' => $user,
			'servicios' => $servicios,
			'canje_4' => $canje_4,
			'canje_8' => $canje_8,
			'activos' => $activos,
			'historial' => $historial,
		]);
	}
}
