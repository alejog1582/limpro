 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirantesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('aspirantes', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();

			$table->string('tipo_cedula');
			$table->string('numero_cedula');
			$table->string('nombre');
			$table->string('direccion');
			$table->string('celular');
			$table->string('telefono')->nullable();
			$table->string('email');
			$table->string('edad');
			$table->string('estado');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('aspirantes');
	}
}
