<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewContactoRequest extends FormRequest {
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
			'nombre_contactenos' => 'required',
			'email_contactenos' => ['required', 'email'],
			'celular_contactenos' => 'required',
			'mensaje_contactenos' => 'required',
		];
	}

	public function messages() {
		return [
			'nombre_contactenos.required' => 'El Nombre es obligatorio',
			'email_contactenos.required' => 'El campo Email es obligatorio',
			'email_contactenos.email' => 'La informacion ingresada no corresponde a un Email valido',
			'celular_contactenos.required' => 'El campo Celular es obligatorio',
			'mensaje_contactenos.required' => 'El campo Mensaje es obligatorio',
		];
	}
}
