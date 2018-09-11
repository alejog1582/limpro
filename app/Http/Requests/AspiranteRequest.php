<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AspiranteRequest extends FormRequest {
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
			'tipo_cedula_aspirante' => 'required',
			'numero_cedula_aspirante' => 'required',
			'nombre_aspirante' => 'required',
			'email_aspirante' => ['required', 'email'],
			'celular_aspirante' => 'required',
			'direccion_aspirante' => 'required',
			'edad_aspirante' => 'required',
			'privacidad' => 'required',
		];
	}
	public function messages() {
		return [
			'tipo_cedula_aspirante.required' => 'El campo Tipo Documento es obligatorio',
			'numero_cedula_aspirante.required' => 'EL campo Numero de Cedula es obligatorio',
			'nombre_aspirante.required' => 'El campo Nombre es obligatorio',
			'email_aspirante.required' => 'El campo Email es obligatorio',
			'email_aspirante.email' => 'La informacion ingresada no corresponde a un Email valido',
			'celular_aspirante.required' => 'El campo Celular es obligatorio',
			'direccion_aspirante.required' => 'El campo Direccion es obligatorio',
			'edad_aspirante.required' => 'El campo Edad es obligatorio',
			'privacidad.required' => 'Debe leer y autorizar la politica de privacidad',
		];
	}
}
