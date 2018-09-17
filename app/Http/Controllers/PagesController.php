<?php

namespace App\Http\Controllers;

use App\Aspirante;
use App\Calificacione;
use App\Contacto;
use App\Funcionario;
use App\Http\Requests\AspiranteRequest;
use App\Http\Requests\CalificacionRequest;
use App\Http\Requests\NewContactoRequest;
use App\Http\Requests\SelecFuncionarioRequest;
use App\Notifications\CalificacionRealizada;
use App\Notifications\FuncionarioSeleccionado;
use App\Notifications\FuncionarioSeleccionadoCliente;
use App\Notifications\FuncionarioSeleccionadoClienteAleatorio;
use App\Notifications\FuncionarioSeleccionadoEmpleado;
use App\Servicio;
use App\User;

class PagesController extends Controller {
	public function Inicio() {
		$user = \Auth::user();
		return view('welcome', [
			'user' => $user,
		]);
	}
	public function Contacto(NewContactoRequest $request) {
		$contacto = Contacto::create([
			'nombre' => $request->input('nombre_contactenos'),
			'email' => $request->input('email_contactenos'),
			'celular' => $request->input('celular_contactenos'),
			'mensaje' => $request->input('mensaje_contactenos'),
			'estado' => 'enviado',
		]);
		return view('cliente.contactenos');
	}
	public function CalificacionUsuario($id) {
		$funcionario = Funcionario::find($id);
		$calificaciones = Calificacione::where('cal_total', '<>', null)->orderBy('created_at', 'desc')->get();
		$servicios = Servicio::all();
		$servicios_calificados = null;
		$suma_calificacion = null;
		$servicios_realizados = null;
		foreach ($calificaciones as $calificacion) {
			if ($funcionario->id == $calificacion->id_empleado) {
				$servicios_calificados = $servicios_calificados + 1;
				$suma_calificacion = $suma_calificacion + $calificacion->cal_total;
			}
		}
		foreach ($servicios as $servicio) {
			if ($funcionario->id == $servicio->id_funcionario_selec) {
				$servicios_realizados = $servicios_realizados + 1;
			}
		}
		$calificacion = ($suma_calificacion / $servicios_calificados);
		return view('calificacion', [
			'calificaciones' => $calificaciones,
			'funcionario' => $funcionario,
			'calificacion' => $calificacion,
			'servicios_calificados' => $servicios_calificados,
			'servicios_realizados' => $servicios_realizados,
		]);

	}
	public function SeleccionServicio($id) {
		$servicio = Servicio::find($id);
		$sservicios = Servicio::all();
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
		$calificacion_estado = false;
		if ($servicio->estado == 'pagado' || $servicio->estado == 'realizado') {
			$id_fun_1 = $servicio->id_funcionario_1;
			$id_fun_2 = $servicio->id_funcionario_2;
			$id_fun_3 = $servicio->id_funcionario_3;
			$id_fun_4 = $servicio->id_funcionario_4;

		}
		foreach ($sservicios as $sservicio) {
			if ($sservicio->id_funcionario_selec == $id_fun_1) {
				$i_1 = $i_1 + 1;
			}
		}
		foreach ($sservicios as $sservicio) {
			if ($sservicio->id_funcionario_selec == $id_fun_2) {
				$i_2 = $i_2 + 1;
			}
		}
		foreach ($sservicios as $sservicio) {
			if ($sservicio->id_funcionario_selec == $id_fun_3) {
				$i_3 = $i_3 + 1;
			}
		}
		foreach ($sservicios as $sservicio) {
			if ($sservicio->id_funcionario_selec == $id_fun_4) {
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
		if ($servicio->estado == 'realizado') {
			$calificacion_estado = true;
		}
		return view('seleccion_calificacion.seleccionservicio', [
			'servicio' => $servicio,
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
			'calificacion_estado' => $calificacion_estado,
		]);
	}
	public function SaveFuncionario(SelecFuncionarioRequest $request) {
		$funcionario = Funcionario::find($request->funcionario);
		$servicio = Servicio::find($request->id_servicio);
		$servicio->id_funcionario_selec = $request->funcionario;

		$servicio->save();

		(new User)->forceFill([
			'name' => $servicio->funcionario_selec->nombre_funcionario,
			'email' => $servicio->funcionario_selec->email,
		])->notify(new FuncionarioSeleccionadoEmpleado($servicio));

		(new User)->forceFill([
			'name' => 'Limpro Notificaciones',
			'email' => 'limpro.notificaciones@gmail.com',
		])->notify(new FuncionarioSeleccionado($servicio));

		if ($servicio->id_funcionario_selec != 1) {
			(new User)->forceFill([
				'name' => $servicio->nombre_cliente,
				'email' => $servicio->email,
			])->notify(new FuncionarioSeleccionadoCliente($servicio));
		}
		if ($servicio->id_funcionario_selec == 1) {
			(new User)->forceFill([
				'name' => $servicio->nombre_cliente,
				'email' => $servicio->email,
			])->notify(new FuncionarioSeleccionadoClienteAleatorio($servicio));
		}

		return view('cliente.selfuncionario', [
			'funcionario' => $funcionario,
			'servicio' => $servicio,
		]);
	}
	public function SaveCalificacion(CalificacionRequest $request) {
		$id_servicio = $request->input('id_servicio');
		$calidad = $request->input('calidad');
		$puntualidad = $request->input('puntualidad');
		$pp = $request->input('pp');
		$amabilidad = $request->input('amabilidad');
		$cal_total = ($calidad + $puntualidad + $pp + $amabilidad) / 4;
		$calificacion = Calificacione::create([
			'id_empleado' => $request->input('id_funcionario'),
			'id_servicio' => $request->input('id_servicio'),
			'cal_calidad_servicio' => $request->input('calidad'),
			'cal_puntualidad' => $request->input('puntualidad'),
			'cal_presentacion_personal' => $request->input('pp'),
			'cal_amabilidad' => $request->input('amabilidad'),
			'cal_total' => $cal_total,
			'comentario' => $request->input('comentario'),

		]);

		$id_calificacion = $calificacion->id;

		$servicio = Servicio::find($id_servicio);

		$servicio->id_calificacion = $id_calificacion;

		$servicio->save();

		(new User)->forceFill([
			'name' => 'Limpro Notificaciones',
			'email' => 'limpro.notificaciones@gmail.com',
		])->notify(new CalificacionRealizada($servicio));

		return view('cliente.calificar', [
			'calificacion' => $calificacion,
			'cal_total' => $cal_total,
		]);
	}
	public function PoliticaServicio() {
		return view('politicas.servicio');
	}
	public function PoliticaPrivacidad() {
		return view('politicas.privacidad');
	}
	public function Aspirante() {
		return view('aspirantes.aspirante');
	}
	public function SaveAspirante(AspiranteRequest $request) {
		$aspirante = Aspirante::create([
			'tipo_cedula' => $request->input('tipo_cedula_aspirante'),
			'numero_cedula' => $request->input('numero_cedula_aspirante'),
			'nombre' => $request->input('nombre_aspirante'),
			'email' => $request->input('email_aspirante'),
			'celular' => $request->input('celular_aspirante'),
			'telefono' => $request->input('fijo_aspirante'),
			'direccion' => $request->input('direccion_aspirante'),
			'edad' => $request->input('edad_aspirante'),
			'estado' => 'enviado',
		]);
		return view('aspirantes.confirmacionaspirante');
	}
	public function SobreNosotros() {
		return view('sobrenosotros');
	}
}
