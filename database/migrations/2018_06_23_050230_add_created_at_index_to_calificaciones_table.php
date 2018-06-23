<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedAtIndexToCalificacionesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('calificaciones', function (Blueprint $table) {
			$table->index('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('calificaciones', function (Blueprint $table) {
			$table->dropIndex('calificaciones_created_at_index');
		});
	}
}
