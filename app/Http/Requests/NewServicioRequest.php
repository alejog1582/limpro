<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewServicioRequest extends FormRequest {
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
			'fecha_servicio' => 'required|after:yesterday',
		];
	}
	public function messages() {
		return [
			'fecha_servicio.required' => 'No se selecciono ninguna fecha',
			'fecha_servicio.after' => 'La fecha debe ser superior o igual a la fecha de hoy',
		];
	}
}
