<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClavesToCalificacionesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('calificaciones', function (Blueprint $table) {
			$table->foreign('id_empleado')->references('id')->on('funcionarios');
			$table->foreign('id_servicio')->references('id')->on('servicios');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('calificaciones', function (Blueprint $table) {
			//
		});
	}
}
