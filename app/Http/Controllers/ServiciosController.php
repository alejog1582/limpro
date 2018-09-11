<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewServicioPagoRequest;
use App\Http\Requests\NewServicioRequest;
use App\Notifications\NuevoServicio;
use App\Notifications\NuevoServicioAdmin;
use App\Notifications\NuevoServicioCanje;
use App\Notifications\NuevoServicioCanjeAdmin;
use App\Notifications\NuevoServicioPayu50;
use App\Notifications\NuevoServicioPayu80;
use App\Servicio;
use App\User;

class ServiciosController extends Controller {
	public function newServicio(NewServicioRequest $request) {
		$fecha_seleccionada = $request->fecha_servicio;
		return view('servicios.newservicio', [
			'fecha_seleccionada' => $fecha_seleccionada,
		]);
	}
	public function pagoNewServicio(NewServicioPagoRequest $request) {
		if ($request->plan == '4') {
			$valor_plan = 50000;
		}if ($request->plan == '8') {
			$valor_plan = 80000;
		}
		$nombre = $request->input('nombre_cliente');
		$email = $request->input('email');
		$nombre_admin = 'Limpro Notificaciones';
		$email_admin = 'limpro.notificaciones@gmail.com';
		$fecha_servicio = strtotime($request->input('fecha_servicio'));
		$servicio = Servicio::create([
			'fecha_servicio' => $request->input('fecha_servicio'),
			'plan' => $request->input('plan'),
			'valor_plan' => $valor_plan,
			'hora_inicio' => $request->input('hora_inicio'),
			'nombre_cliente' => $request->input('nombre_cliente'),
			'direccion_servicio' => $request->input('direccion'),
			'detalle_direccion' => $request->input('detalle_dir'),
			'email' => $request->input('email'),
			'celular_contacto' => $request->input('celular'),
			'fijo_contacto' => $request->input('fijo'),
			'metodo_pago' => $request->input('metodo_pago'),
			'estado' => 'solicitado',
			'canje' => 'no',
		]);
		if ($servicio->metodo_pago == 'consignacion') {
			(new User)->forceFill([
				'name' => $nombre,
				'email' => $email,
			])->notify(new NuevoServicio($servicio));
		}
		if ($servicio->metodo_pago == 'payu') {
			if ($servicio->valor_plan == 50000) {
				(new User)->forceFill([
					'name' => $nombre,
					'email' => $email,
				])->notify(new NuevoServicioPayu50($servicio));
			}
			if ($servicio->valor_plan == 80000) {
				(new User)->forceFill([
					'name' => $nombre,
					'email' => $email,
				])->notify(new NuevoServicioPayu80($servicio));
			}
		}
		(new User)->forceFill([
			'name' => $nombre_admin,
			'email' => $email_admin,
		])->notify(new NuevoServicioAdmin($servicio));
		return view('servicios.pagonewservicio', [
			'servicio' => $servicio,
		]);
	}
	public function canjeNewServicio(NewServicioPagoRequest $request) {
		$servicios = Servicio::all();
		if ($request->plan == '4') {
			$valor_plan = 50000;
		}if ($request->plan == '8') {
			$valor_plan = 80000;
		}
		$nombre = $request->input('nombre_cliente');
		$email = $request->input('email');
		$nombre_admin = 'Limpro Notificaciones';
		$email_admin = 'limpro.notificaciones@gmail.com';
		$fecha_servicio = strtotime($request->input('fecha_servicio'));
		$servicio = Servicio::create([
			'fecha_servicio' => $request->input('fecha_servicio'),
			'plan' => $request->input('plan'),
			'valor_plan' => $valor_plan,
			'hora_inicio' => $request->input('hora_inicio'),
			'nombre_cliente' => $request->input('nombre_cliente'),
			'direccion_servicio' => $request->input('direccion'),
			'detalle_direccion' => $request->input('detalle_dir'),
			'email' => $request->input('email'),
			'celular_contacto' => $request->input('celular'),
			'fijo_contacto' => $request->input('fijo'),
			'metodo_pago' => $request->input('metodo_pago'),
			'estado' => 'solicitado',
			'canje' => 'si',
		]);
		foreach ($servicios as $servicio) {
			if ($servicio->email == $request->email) {
				if ($servicio->plan == $request->plan) {
					if ($servicio->id_calificacion != null) {
						if ($servicio->canje == 'no') {
							$servicio->canje = 'si';
							$servicio->save();
						}
					}
				}
			}
		}
		if ($servicio->metodo_pago == 'canje') {
			(new User)->forceFill([
				'name' => $nombre,
				'email' => $email,
			])->notify(new NuevoServicioCanje($servicio));
		}

		(new User)->forceFill([
			'name' => $nombre_admin,
			'email' => $email_admin,
		])->notify(new NuevoServicioCanjeAdmin($servicio));

		return view('servicios.pagonewservicio', [
			'servicio' => $servicio,
		]);
	}
	public function confirmacionPagoNewServicio() {
		return view('servicios.confirmacionpagonewservicio');
	}
}
