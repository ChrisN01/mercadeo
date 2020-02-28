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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Ruta de la vista para seleccionar el tipo de registro
Route::get('TipoRegistro', 'RegistroController@index')->name('seleccionar_registro'); 
//Ruta para verificar el tipo de registro selecionado
Route::post('ObtenerTipoRegistro', 'RegistroController@tipo_registro_seleccionado')->name('verificar_tipo_registro');
Route::get('RegistroPersonaN', 'RegistroController@registro_clientes')->name('vista_registrar_clientes'); 
Route::get('RegistroEmpresa', 'RegistroController@registro_empresas')->name('vista_registrar_empresas'); 
//Ruta de envio de formulario para el registro de clientes
Route::post('ObtenerRegistroClientes', 'ClienteController@store')->name('registro_clientes');
//Ruta de envio de formulario para el registro de empresas
Route::post('ObtenerRegistroEmpresas', 'EmpresaController@store')->name('registro_empresas');