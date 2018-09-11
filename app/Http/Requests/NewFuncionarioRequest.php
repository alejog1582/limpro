<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewFuncionarioRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'url_foto' => 'required',
			'tipo_cedula' => 'required',
			'numero_cedula' => 'required',
			'nombre_funcionario' => 'required',
			'sexo' => 'required',
			'sangre' => 'required',
			'fecha_vinculacion' => 'required',
			'tipo_contrato' => 'required',
			'banco' => 'required',
			'cuenta' => 'required',
			'oficio' => 'required',
			'fecha_nacimiento' => 'required',
			'direccion_residencia' => 'required',
			'celular' => 'required',
			'email' => 'required',
			'nombre_acudiente' => 'required',
			'numero_acudiente' => 'required',
			'tipo_cuenta' => 'required',

		];
	}
	public function messages() {
		return [
			'url_foto.required' => 'El campo Url Foto es obligatorio',
			'tipo_cedula.required' => 'El campo Tipo de Cedula es obligatorio',
			'numero_cedula.required' => 'El campo Numero de Cedula es obligatorio',
			'nombre_funcionario.required' => 'El campo Nombre de Funcionario es obligatorio',
			'sexo.required' => 'El campo Sexo es obligatorio',
			'sangre.required' => 'El campo Sangre es obligatorio',
			'fecha_vinculacion.required' => 'El campo Fecha de Vinculacion es obligatorio',
			'tipo_contrato.required' => 'El campo Tipo de Contrato es obligatorio',
			'tipo_cuenta.required' => 'El campo Tipo de Cuenta es obligatorio',
			'banco.required' => 'El campo Banco es obligatorio',
			'cuenta.required' => 'El campo Cuenta es obligatorio',
			'oficio.required' => 'El campo Oficio es obligatorio',
			'fecha_nacimiento.required' => 'El campo Fecha de Nacimiento es obligatorio',
			'direccion_residencia.required' => 'El campo Direccion de Residencia es obligatorio',
			'celular.required' => 'El campo Celular es obligatorio',
			'email.required' => 'El campo Email es obligatorio',
			'nombre_acudiente.required' => 'El campo Nombre de Acudiente es obligatorio',
			'numero_acudiente.required' => 'El campo Numero de Acudiente es obligatorio',

		];
	}
}
