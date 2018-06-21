<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});

//Administracion

//Funcionarios
Route::get('/administracion', 'AdministracionController@Administracion');
Route::get('/administracion/funcionarios', 'AdministracionController@Funcionarios');
Route::get('/administracion/funcionarios/new', 'AdministracionController@newFuncionario');
Route::get('/administracion/funcionarios/edit', 'AdministracionController@editFuncionario');
//Fin Funcionarios

//Servicios
Route::get('/administracion/servicios', 'AdministracionController@Servicios');
Route::get('/administracion/servicios/edit', 'AdministracionController@editServicio');
//Fin Servicios

//Calificaciones
Route::get('/administracion/calificaciones', 'AdministracionController@Calificaciones');
Route::get('/administracion/calificaciones/funcionarios', 'AdministracionController@CalificacionesFuncionarios');
Route::get('/administracion/calificaciones/servicios', 'AdministracionController@CalificacionesServicios');
//Fin Calificaciones

//Facturacion
Route::get('/administracion/facturacion', 'AdministracionController@Facturacion');
Route::get('/administracion/facturacion/edit', 'AdministracionController@editFacturacion');
//Fin Facturacion

//Fin de Administracion
//
//
//
//Servicios
Route::post('/newservicio', 'ServiciosController@newServicio');
Route::get('/newservicio/pago', 'ServiciosController@pagoNewServicio');
Route::get('/newservicio/pago/confirmacion', 'ServiciosController@confirmacionPagoNewServicio');
//FIn Servicios
//
//
//
//Mi Cuenta
Route::get('/micuenta', 'ClienteController@miCuenta');
Route::get('/micuenta/selfuncionario', 'ClienteController@selFuncionario');
Route::get('/micuenta/selfuncionario/save', 'ClienteController@selFuncionarioSave');
Route::get('/micuenta/calificar', 'ClienteController@Calificar');
Route::get('/micuenta/calificar/new', 'ClienteController@calificarNew');
Route::get('/micuenta/calificar/new/save', 'ClienteController@calificarNewSave');

//Fin Mi Cuenta