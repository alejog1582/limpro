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
		$i_1 = null;
		$i_2 = null;
		$i_3 = null;
		$i_4 = null;
		$sum_1 = null;
		$sum_2 = null;
		$sum_3 = null;
		$sum_4 = null;
		$x_1 = null;
		$x_2 = null;
		$x_3 = null;
		$x_4 = null;
		$cal_1 = null;
		$cal_2 = null;
		$cal_3 = null;
		$cal_4 = null;
		$id_fun_1 = null;
		$id_fun_2 = null;
		$id_fun_3 = null;
		$id_fun_4 = null;
		$canje_4 = null;
		$canje_8 = null;
		$activos = false;
		$historial = false;
		foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->id_calificacion == null) {
					$activos = true;
				}
			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->id_calificacion != null) {
					$historial = true;
				}
			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->estado == 'pagado' || $servicio->estado == 'realizado') {
					$id_fun_1 = $servicio->id_funcionario_1;
					$id_fun_2 = $servicio->id_funcionario_2;
					$id_fun_3 = $servicio->id_funcionario_3;
					$id_fun_4 = $servicio->id_funcionario_4;

				}
			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->id_funcionario_selec == $id_fun_1) {
				$i_1 = $i_1 + 1;
			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->id_funcionario_selec == $id_fun_2) {
				$i_2 = $i_2 + 1;
			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->id_funcionario_selec == $id_fun_3) {
				$i_3 = $i_3 + 1;
			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->id_funcionario_selec == $id_fun_4) {
				$i_4 = $i_4 + 1;
			}
		}
		foreach ($calificaciones as $calificacion) {
			if ($calificacion->id_empleado == $id_fun_1) {
				$sum_1 = $sum_1 + $calificacion->cal_total;
				$x_1 = $x_1 + 1;

			}
		}
		foreach ($calificaciones as $calificacion) {
			if ($calificacion->id_empleado == $id_fun_2) {
				$sum_2 = $sum_2 + $calificacion->cal_total;
				$x_2 = $x_2 + 1;

			}
		}
		foreach ($calificaciones as $calificacion) {
			if ($calificacion->id_empleado == $id_fun_3) {
				$sum_3 = $sum_3 + $calificacion->cal_total;
				$x_3 = $x_3 + 1;

			}
		}
		foreach ($calificaciones as $calificacion) {
			if ($calificacion->id_empleado == $id_fun_4) {
				$sum_4 = $sum_4 + $calificacion->cal_total;
				$x_4 = $x_4 + 1;

			}
		}
		foreach ($servicios as $servicio) {
			if ($servicio->email == $user->email) {
				if ($servicio->id_funcionario_1 != null) {
					$cal_1 = $sum_1 / $x_1;
				}
				if ($servicio->id_funcionario_2 != null) {
					$cal_2 = $sum_2 / $x_2;
				}
				if ($servicio->id_funcionario_3 != null) {
					$cal_3 = $sum_3 / $x_3;
				}
				if ($servicio->id_funcionario_4 != null) {
					$cal_4 = $sum_4 / $x_4;
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
			'id_fun_2' => $id_fun_2,
			'id_fun_3' => $id_fun_3,
			'id_fun_4' => $id_fun_4,
			'i_1' => $i_1,
			'i_2' => $i_2,
			'i_3' => $i_3,
			'i_4' => $i_4,
			'x_1' => $x_1,
			'x_2' => $x_2,
			'x_3' => $x_3,
			'x_4' => $x_4,
			'cal_1' => $cal_1,
			'cal_2' => $cal_2,
			'cal_3' => $cal_3,
			'cal_4' => $cal_4,
			'canje_4' => $canje_4,
			'canje_8' => $canje_8,
			'activos' => $activos,
			'historial' => $historial,
		]);
	}
}
