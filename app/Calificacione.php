<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacione extends Model {
	protected $guarded = [];

	public function cal_funcionario() {
		return $this->belongsTo('App\Funcionario', 'id_empleado');
	}
	public function cal_servicio() {
		return $this->belongsTo('App\Servicio', 'id_servicio');
	}
}
