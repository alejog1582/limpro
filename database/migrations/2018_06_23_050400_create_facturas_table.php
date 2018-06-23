<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('facturas', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();

			$table->integer('numero_factura')->nullable();
			$table->string('nombre_cliente');
			$table->string('plan');
			$table->integer('valor_antes_iva');
			$table->integer('iva');
			$table->integer('valor_total');
			$table->string('resolucion_dian');
			$table->string('estado');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('facturas');
	}
}
