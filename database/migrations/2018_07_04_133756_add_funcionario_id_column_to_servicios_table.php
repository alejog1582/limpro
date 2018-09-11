<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFuncionarioIdColumnToServiciosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('servicios', function (Blueprint $table) {
			$table->foreign('id_funcionario_1')->references('id')->on('funcionarios');
			$table->foreign('id_funcionario_2')->references('id')->on('funcionarios');
			$table->foreign('id_funcionario_3')->references('id')->on('funcionarios');
			$table->foreign('id_funcionario_4')->references('id')->on('funcionarios');
			$table->foreign('id_funcionario_selec')->references('id')->on('funcionarios');
			$table->foreign('id_calificacion')->references('id')->on('calificaciones');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('servicios', function (Blueprint $table) {
			$table->dropForeign('servicios_id_calificacion_foreign');
		});
	}
}
