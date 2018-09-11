<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewServicioPagoRequest extends FormRequest {
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
			'nombre_cliente' => 'required',
			'plan' => 'required',
			'hora_inicio' => 'required',
			'email' => ['required', 'email'],
			'celular' => 'required',
			'direccion' => 'required',
			'metodo_pago' => 'required',
			'privacidad' => 'required',
		];
	}
	public function messages() {
		return [
			'fecha_servicio.required' => 'No se selecciono ninguna fecha',
			'fecha_servicio.after' => 'La fecha debe ser superior o igual a la fecha de hoy',
			'nombre_cliente.required' => 'El campo Nombre de Cliente es obligatorio',
			'plan.required' => 'El campo Plan es obligatorio',
			'hora_inicio.required' => 'El campo Hora de Inicio es obligatorio',
			'email.required' => 'El campo Email es obligatorio',
			'email.email' => 'El contenido no es un email',
			'celular.required' => 'El campo Celular es obligatorio',
			'direccion.required' => 'El campo Direccion es obligatorio',
			'metodo_pago.required' => 'El campo Metodo de Pago es obligatorio',
			'privacidad.required' => 'Debe leer y autorizar la politica de privacidad',
		];
	}
}
