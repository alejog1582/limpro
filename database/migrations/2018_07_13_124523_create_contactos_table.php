<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('contactos', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();

			$table->string('nombre');
			$table->string('email');
			$table->string('celular');
			$table->string('mensaje');
			$table->string('estado');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('contactos');
	}
}
