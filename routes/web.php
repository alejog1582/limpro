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

Route::get('/', 'PagesController@Inicio');
Route::post('/contactenos', 'PagesController@Contacto');

//
//
//
//Servicios
Route::get('/newservicio', 'ServiciosController@newServicio');
Route::post('/newservicio/pago', 'ServiciosController@pagoNewServicio');
Route::post('/newservicio/canje', 'ServiciosController@canjeNewServicio');
Route::get('/newservicio/pago/confirmacion', 'ServiciosController@confirmacionPagoNewServicio');
//FIn Servicios
//
//
//
//Mi Cuenta
Route::get('/micuenta', 'ClienteController@miCuenta');
Route::get('/micuenta/selfuncionario/save', 'ClienteController@selFuncionarioSave');
Route::get('/micuenta/calificar/new', 'ClienteController@calificarNew');
Route::get('/micuenta/calificar/new/save', 'ClienteController@calificarNewSave');

//Fin Mi Cuenta
Auth::routes();

Route::get('/micuenta', 'HomeController@index')->name('micuenta');

//seleccion_calificacion
Route::get('/calificacion/funcionario/{id}', 'PagesController@CalificacionUsuario');
Route::get('/seleccion/servicio/{id}', 'PagesController@SeleccionServicio');
Route::post('/seleccion/savefuncionario', 'PagesController@SaveFuncionario');
Route::post('/seleccion/savecalificacion', 'PagesController@SaveCalificacion');
//fin seleccion_calificacion

//Politicas
Route::get('/politica/servicio', 'PagesController@PoliticaServicio');
Route::get('/politica/privacidad', 'PagesController@PoliticaPrivacidad');
//FIn Politicas

//Aspirantes
Route::get('/aspirante', 'PagesController@Aspirante');
Route::post('/aspirante/save', 'PagesController@SaveAspirante');
//FIn Aspirantes

//Sobre Nosotros
Route::get('/sobrenosotros', 'PagesController@SobreNosotros');
//FIn SObre Nosotros

Route::group(['middleware' => 'admin'], function () {
//Administracion

//Funcionarios
	Route::get('/administracion', 'AdministracionController@Administracion');
	Route::get('/administracion/funcionarios', 'AdministracionController@Funcionarios');
	Route::post('/administracion/funcionarios/new', 'AdministracionController@newFuncionario');
	Route::get('/administracion/funcionarios/edit/{id}', 'AdministracionController@editFuncionario');
	Route::post('/administracion/funcionarios/edit/save', 'AdministracionController@saveEditFuncionario');
	Route::get('/administracion/funcionarios/desactivos', 'AdministracionController@desactivosFuncionario');
//Fin Funcionarios

//Mensajes
	Route::get('/administracion/mensajes/edit/{id}', 'AdministracionController@editMensaje');
	Route::post('/administracion/mensajes/edit/save', 'AdministracionController@SaveEditMensaje');
//Fin Mensajes

//Aspirantes
	Route::get('/administracion/aspirante/edit/{id}', 'AdministracionController@editAspirante');
	Route::post('/administracion/aspirante/edit/save', 'AdministracionController@SaveEditAspirante');
//Fin Aspirantes

//Servicios
	Route::get('/administracion/servicios/{id}', 'AdministracionController@Servicios');
	Route::post('/administracion/servicios/edit', 'AdministracionController@editServicio');
//Fin Servicios

//Calificaciones-
	Route::get('/administracion/calificaciones', 'AdministracionController@Calificaciones');
	Route::get('/administracion/calificaciones/funcionarios/{id}', 'AdministracionController@CalificacionesFuncionarios');
	Route::get('/administracion/calificaciones/servicios/{id}', 'AdministracionController@CalificacionesServicios');
//Fin Calificaciones

//Facturacion
	Route::get('/administracion/facturacion', 'AdministracionController@Facturacion');
	Route::get('/administracion/facturacion/edit', 'AdministracionController@editFacturacion');
//Fin Facturacion

//Fin de Administracion
});