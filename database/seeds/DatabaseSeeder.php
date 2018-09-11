<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Funcionario::class)
			->times(10)
			->create();
		factory(App\Servicio::class)
			->times(30)
			->create();
		factory(App\Calificacione::class)
			->times(30)
			->create();

	}
}
