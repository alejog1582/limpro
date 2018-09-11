<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedAtIndexToServiciosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('servicios', function (Blueprint $table) {
			$table->index('created_at');
			$table->index('fecha_servicio');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('servicios', function (Blueprint $table) {
			$table->dropIndex('servicios_created_at_index');
			$table->dropIndex('servicios_fecha_servicio_index');
		});
	}
}
