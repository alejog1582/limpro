<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('calificaciones', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();

			$table->integer('id_empleado')->unsigned();
			$table->integer('id_servicio')->unsigned();
			$table->integer('cal_calidad_servicio');
			$table->integer('cal_puntualidad');
			$table->integer('cal_presentacion_personal');
			$table->integer('cal_amabilidad');
			$table->float('cal_total');
			$table->string('comentario')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('calificaciones');
	}
}
