<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(App\User::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Funcionario::class, function (Faker $faker) {
	return [
		'tipo_cedula' => $faker->randomElement($array = array('cc', 'ce')),
		'numero_cedula' => $faker->numberBetween($min = 10000, $max = 100000),
		'url_foto' => $faker->imageUrl(300, 300),
		'nombre_funcionario' => $faker->name(),
		'sexo' => $faker->randomElement($array = array('masculino', 'femenino')),
		'tipo_sangre' => $faker->randomElement($array = array('a+', 'o+', 'a-', 'o-')),
		'fecha_vinculacion' => $faker->date($format = 'Y-m-d'),
		'fecha_desvinculacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'tipo_contrato' => $faker->randomElement($array = array('directo', 'hora')),
		'tipo_cuenta' => $faker->randomElement($array = array('ahorro', 'corriente', 'daviplata')),
		'banco' => $faker->randomElement($array = array('davivienda', 'bancolombia', 'citi')),
		'numero_cuenta' => $faker->numberBetween($min = 10000, $max = 100000),
		'oficio' => $faker->randomElement($array = array('aseo', 'mantenimiento', 'chef')),
		'fecha_nacimiento' => $faker->date($format = 'Y-m-d'),
		'direccion_residencia' => $faker->address(),
		'email' => $faker->email(),
		'celular_contacto' => $faker->e164PhoneNumber(),
		'fijo_contacto' => $faker->e164PhoneNumber(),
		'nombre_acudiente' => $faker->name(),
		'celular_acudiente' => $faker->e164PhoneNumber(),
		'estado' => $faker->randomElement($array = array('activo', 'desactivo')),
		'created_at' => $faker->dateTimeThisDecade,
		'updated_at' => $faker->dateTimeThisDecade,
	];
});

$factory->define(App\Servicio::class, function (Faker $faker) {
	return [
		'fecha_servicio' => $faker->date($format = 'Y-m-d'),
		'plan' => $faker->randomElement($array = array('4', '8')),
		'valor_plan' => $faker->randomElement($array = array('50000', '80000')),
		'hora_inicio' => $faker->randomElement($array = array('8 a.m', '9 a.m', '1 p.m', '2 p.m')),
		'nombre_cliente' => $faker->name(),
		'direccion_servicio' => $faker->address(),
		'detalle_direccion' => $faker->streetAddress(),
		'email' => $faker->email(),
		'celular_contacto' => $faker->e164PhoneNumber(),
		'fijo_contacto' => $faker->e164PhoneNumber(),
		'id_funcionario_1' => $faker->numberBetween($min = 1, $max = 10),
		'id_funcionario_2' => $faker->numberBetween($min = 1, $max = 10),
		'id_funcionario_3' => $faker->numberBetween($min = 1, $max = 10),
		'id_funcionario_4' => $faker->numberBetween($min = 1, $max = 10),
		'id_funcionario_selec' => $faker->numberBetween($min = 1, $max = 10),
		'metodo_pago' => $faker->randomElement($array = array('consignacion', 'payu')),
		'estado' => $faker->randomElement($array = array('solicitado', 'pagado', 'realizado')),
//'id_calificacion' => $faker->numberBetween($min = 1, $max = 10),
		'created_at' => $faker->dateTimeThisDecade,
		'updated_at' => $faker->dateTimeThisDecade,
	];
});

$factory->define(App\Calificacione::class, function (Faker $faker) {
	return [
		'id_empleado' => $faker->numberBetween($min = 1, $max = 10),
		'id_servicio' => $faker->numberBetween($min = 1, $max = 30),
		'cal_calidad_servicio' => $faker->numberBetween($min = 1, $max = 5),
		'cal_puntualidad' => $faker->numberBetween($min = 1, $max = 5),
		'cal_presentacion_personal' => $faker->numberBetween($min = 1, $max = 5),
		'cal_amabilidad' => $faker->numberBetween($min = 1, $max = 5),
		'cal_total' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
		'comentario' => $faker->realText($maxNbChars = 20),
		'created_at' => $faker->dateTimeThisDecade,
		'updated_at' => $faker->dateTimeThisDecade,
	];
});