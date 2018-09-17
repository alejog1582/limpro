<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('funcionarios', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();

			$table->string('tipo_cedula');
			$table->string('numero_cedula');
			$table->string('url_foto');
			$table->string('nombre_funcionario');
			$table->string('sexo');
			$table->string('tipo_sangre');
			$table->string('fecha_vinculacion');
			$table->string('fecha_desvinculacion')->nullable();
			$table->string('tipo_contrato');
			$table->string('talla_uniforme');
			$table->string('eps');
			$table->string('antecedentes_medicos')->nullable();
			$table->string('tipo_cuenta')->nullable();
			$table->string('banco')->nullable();
			$table->string('numero_cuenta')->nullable();
			$table->string('oficio');
			$table->string('fecha_nacimiento');
			$table->string('direccion_residencia');
			$table->string('email');
			$table->string('celular_contacto');
			$table->string('fijo_contacto')->nullable();
			$table->string('nombre_acudiente');
			$table->string('celular_acudiente');
			$table->string('estado');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('funcionarios');
	}
}
