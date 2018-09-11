<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {
	protected $guarded = [];

	public function funcionario_1() {
		return $this->belongsTo('App\Funcionario', 'id_funcionario_1');
	}
	public function funcionario_2() {
		return $this->belongsTo('App\Funcionario', 'id_funcionario_2');
	}
	public function funcionario_3() {
		return $this->belongsTo('App\Funcionario', 'id_funcionario_3');
	}
	public function funcionario_4() {
		return $this->belongsTo('App\Funcionario', 'id_funcionario_4');
	}
	public function funcionario_selec() {
		return $this->belongsTo('App\Funcionario', 'id_funcionario_selec');
	}
	public function calificacion() {
		return $this->belongsTo('App\Calificacione', 'id_calificacion');
	}
}
