<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedAtIndexToFuncionariosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('funcionarios', function (Blueprint $table) {
			$table->index('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('funcionarios', function (Blueprint $table) {
			$table->dropIndex('funcionarios_created_at_index');
		});
	}
}
