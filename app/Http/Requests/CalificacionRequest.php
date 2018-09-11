<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalificacionRequest extends FormRequest {
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
			'calidad' => 'required',
			'puntualidad' => 'required',
			'pp' => 'required',
			'amabilidad' => 'required',
		];
	}
	public function messages() {
		return [
			'calidad.required' => 'La calificacion por calidad es obligatoria',
			'puntualidad.required' => 'La calificacion por puntualidad es obligatoria',
			'pp.required' => 'La calificacion por presentacion personal es obligatoria',
			'amabilidad.required' => 'La calificacion por amabilidad es obligatoria',
		];
	}
}
