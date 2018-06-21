<?php

namespace App\Http\Controllers;

class AdministracionController extends Controller {

	public function Administracion() {
		return view('administracion.panelDeControl');
	}

	//Funcionarios
	public function Funcionarios() {
		return view('administracion.funcionarios');
	}
	public function newFuncionario() {
		return view('administracion.newfuncionario');
	}
	public function editFuncionario() {
		return view('administracion.editfuncionario');
	}
	//FIn Funcionarios

	//Servicios
	public function Servicios() {
		return view('administracion.servicios');
	}
	public function editServicio() {
		return view('administracion.editservicios');
	}
	//Fin Servicios

	//Calificaciones
	public function Calificaciones() {
		return view('administracion.calificaciones');
	}
	public function CalificacionesFuncionarios() {
		return view('administracion.calificacionesfuncionarios');
	}
	public function CalificacionesServicios() {
		return view('administracion.calificacionesservicios');
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
