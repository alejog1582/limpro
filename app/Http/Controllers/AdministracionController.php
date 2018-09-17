<?php

namespace App\Http\Controllers;

use App\Aspirante;
use App\Calificacione;
use App\Contacto;
use App\Funcionario;
use App\Http\Requests\NewFuncionarioRequest;
use App\Notifications\RealizarCalificacion;
use App\Notifications\SeleccionFuncionario;
use App\Servicio;
use App\User;
use Illuminate\Http\Request;

class AdministracionController extends Controller {

	public function Administracion() {
		$funcionarios = Funcionario::all();
		$servicios = Servicio::all();
		$calificaciones = Calificacione::all();
		$mensajes = Contacto::all();
		$aspirantes = Aspirante::all();
		return view('administracion.panelDeControl', [
			'funcionarios' => $funcionarios,
			'servicios' => $servicios,
			'calificaciones' => $calificaciones,
			'mensajes' => $mensajes,
			'aspirantes' => $aspirantes,
		]);
	}

	//Funcionarios
	public function Funcionarios() {
		return view('administracion.funcionarios');
	}
	public function newFuncionario(NewFuncionarioRequest $request) {

		$funcionario = Funcionario::create([
			'tipo_cedula' => $request->input('tipo_cedula'),
			'numero_cedula' => $request->input('numero_cedula'),
			'url_foto' => $request->input('url_foto'),
			'nombre_funcionario' => $request->input('nombre_funcionario'),
			'sexo' => $request->input('sexo'),
			'tipo_sangre' => $request->input('sangre'),
			'fecha_vinculacion' => $request->input('fecha_vinculacion'),
			'talla_uniforme' => $request->input('talla_uniforme'),
			'tipo_contrato' => $request->input('tipo_contrato'),
			'tipo_cuenta' => $request->input('tipo_cuenta'),
			'banco' => $request->input('banco'),
			'numero_cuenta' => $request->input('cuenta'),
			'oficio' => $request->input('oficio'),
			'fecha_nacimiento' => $request->input('fecha_nacimiento'),
			'direccion_residencia' => $request->input('direccion_residencia'),
			'email' => $request->input('email'),
			'celular_contacto' => $request->input('celular'),
			'fijo_contacto' => $request->input('fijo'),
			'nombre_acudiente' => $request->input('nombre_acudiente'),
			'celular_acudiente' => $request->input('numero_acudiente'),
			'eps' => $request->input('eps'),
			'antecedentes_medicos' => $request->input('antecedentes'),
			'estado' => 'activo',
		]);
		$servicio = Servicio::create([
			'fecha_servicio' => '2017-01-01',
			'plan' => '4',
			'valor_plan' => 50000,
			'hora_inicio' => '8 a.m',
			'nombre_cliente' => 'Administracion',
			'direccion_servicio' => 'Direccion Administracion',
			'email' => 'administracion@limpro.com.co',
			'celular_contacto' => '3213857042',
			'id_funcionario_1' => $funcionario->id,
			'id_funcionario_2' => $funcionario->id,
			'id_funcionario_3' => $funcionario->id,
			'id_funcionario_4' => $funcionario->id,
			'id_funcionario_selec' => $funcionario->id,
			'metodo_pago' => 'consignacion',
			'estado' => 'realizado',
			'canje' => 'si',
		]);
		$calificacion = Calificacione::create([
			'id_empleado' => $funcionario->id,
			'id_servicio' => $servicio->id,
			'cal_calidad_servicio' => 5,
			'cal_puntualidad' => 5,
			'cal_presentacion_personal' => 5,
			'cal_amabilidad' => 5,
			'cal_total' => 5,
			'comentario' => 'El servicio prestado a cumplido con las expectativas.',

		]);

		$servicio_this = Servicio::find($servicio->id);

		$servicio_this->id_calificacion = $calificacion->id;

		$servicio_this->save();

		return view('administracion.newfuncionario', [
			'funcionario' => $funcionario,
		]);
	}
	public function editFuncionario($id) {
		$servicios_calificados = null;
		$suma_calificacion = null;
		$servicios_realizados = null;
		$funcionario = Funcionario::find($id);
		$calificaciones = Calificacione::all();
		$servicios = Servicio::all();
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
		return view('administracion.editfuncionario', [
			'funcionario' => $funcionario,
			'calificacion' => $calificacion,
			'servicios_calificados' => $servicios_calificados,
			'servicios_realizados' => $servicios_realizados,
		]);
	}
	public function saveEditFuncionario(Request $request) {
		$funcionario = Funcionario::find($request->id_funcionario);
		if ($request->fecha_desvinculacion == null) {

			$funcionario->tipo_cuenta = $request->tipo_cuenta;
			$funcionario->banco = $request->banco;
			$funcionario->numero_cuenta = $request->cuenta;
			$funcionario->direccion_residencia = $request->direccion_residencia;
			$funcionario->email = $request->email;
			$funcionario->celular_contacto = $request->celular;
			$funcionario->fijo_contacto = $request->fijo;
			$funcionario->nombre_acudiente = $request->nombre_acudiente;
			$funcionario->celular_acudiente = $request->numero_acudiente;
			$funcionario->tipo_contrato = $request->tipo_contrato;
			$funcionario->oficio = $request->oficio;

			$funcionario->save();

		}
		if ($request->fecha_desvinculacion != null) {

			$funcionario->tipo_cuenta = $request->tipo_cuenta;
			$funcionario->banco = $request->banco;
			$funcionario->numero_cuenta = $request->cuenta;
			$funcionario->direccion_residencia = $request->direccion_residencia;
			$funcionario->email = $request->email;
			$funcionario->celular_contacto = $request->celular;
			$funcionario->fijo_contacto = $request->fijo;
			$funcionario->nombre_acudiente = $request->nombre_acudiente;
			$funcionario->celular_acudiente = $request->numero_acudiente;
			$funcionario->tipo_contrato = $request->tipo_contrato;
			$funcionario->oficio = $request->oficio;
			$funcionario->fecha_desvinculacion = $request->fecha_desvinculacion;
			$funcionario->estado = 'desactivo';

			$funcionario->save();

		}
		return view('administracion.saveeditfuncionario');
	}
	public function editMensaje($id) {
		$mensaje = Contacto::find($id);
		return view('administracion.editmensaje', [
			'mensaje' => $mensaje,
		]);
	}
	public function SaveEditMensaje(Request $request) {
		$mensaje = Contacto::find($request->id_mensaje);

		$mensaje->estado = $request->estado;

		$mensaje->save();

		return view('administracion.saveeditmensaje');
	}
	public function editAspirante($id) {
		$aspirante = Aspirante::find($id);
		return view('administracion.editaspirante', [
			'aspirante' => $aspirante,
		]);
	}
	public function SaveEditAspirante(Request $request) {
		$aspirante = Aspirante::find($request->id_aspirante);

		$aspirante->estado = $request->estado;

		$aspirante->save();

		return view('administracion.saveeditaspirante');
	}
	public function desactivosFuncionario() {

		$funcionarios = Funcionario::where('estado', 'desactivo')->get();

		return view('administracion.desactivosmensaje', [
			'mensaje' => $mensaje,
		]);
	}
	//FIn Funcionarios

	//Servicios
	public function Servicios($id) {
		$servicio = Servicio::find($id);
		return view('administracion.servicios', [
			'servicio' => $servicio,
		]);
	}
	public function editServicio(Request $request) {
		$nombre = $request->nombre;
		$email = $request->email;

		$servicio = Servicio::find($request->id_servicio);

		$servicio->estado = $request->estado;
		$servicio->id_funcionario_selec = $request->funcionario_seleccionado;
		$servicio->id_funcionario_1 = $request->id_fun_1;
		$servicio->id_funcionario_2 = $request->id_fun_2;
		$servicio->id_funcionario_3 = $request->id_fun_3;
		$servicio->id_funcionario_4 = $request->id_fun_4;

		$servicio->save();

		if ($servicio->estado == 'pagado') {
			(new User)->forceFill([
				'name' => $nombre,
				'email' => $email,
			])->notify(new SeleccionFuncionario($servicio));
		}
		if ($servicio->estado == 'realizado') {
			(new User)->forceFill([
				'name' => $nombre,
				'email' => $email,
			])->notify(new RealizarCalificacion($servicio));
		}
		return view('administracion.editservicios');
	}
	//Fin Servicios

	//Calificaciones
	public function Calificaciones() {
		return view('administracion.calificaciones');
	}
	public function CalificacionesFuncionarios($id) {
		$calificacion = Calificacione::find($id);
		return view('administracion.calificacionesfuncionarios', [
			'calificacion' => $calificacion,
		]);
	}
	public function calificacionesservicios($id) {
		$servicio = Servicio::find($id);
		return view('administracion.calificacionesservicios', [
			'servicio' => $servicio,
		]);
	}
	//Fin Calificaciones

	//Facturacion
	public function Facturacion() {
		return view('administracion.facturacion');
	}
	public function editFacturacion() {
		return view('administracion.editfacturacion');
	}
	//Fin Facturacion
}
