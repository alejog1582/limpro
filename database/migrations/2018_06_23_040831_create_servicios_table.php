<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('servicios', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();

			$table->date('fecha_servicio');
			$table->string('plan');
			$table->integer('valor_plan');
			$table->string('hora_inicio');
			$table->string('nombre_cliente');
			$table->string('direccion_servicio');
			$table->string('detalle_direccion')->nullable();
			$table->string('email');
			$table->string('celular_contacto');
			$table->string('fijo_contacto')->nullable();
			$table->integer('id_funcionario_1')->nullable();
			$table->integer('id_funcionario_2')->nullable();
			$table->integer('id_funcionario_3')->nullable();
			$table->integer('id_funcionario_4')->nullable();
			$table->integer('id_funcionario_selec')->nullable();
			$table->string('metodo_pago')->nullable();
			$table->string('estado');
			$table->integer('id_calificacion')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('servicios');
	}
}
