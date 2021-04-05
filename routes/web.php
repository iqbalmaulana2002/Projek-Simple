<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MasyarakatController@landingpage');

Route::get('/login','AuthController@viewLogin')->name('login');
Route::post('/login','AuthController@login');
Route::post('/logout','AuthController@logout');

Route::get('/register','AuthController@viewRegister');
Route::post('/register', 'AuthController@register');


Route::group(['middleware' => 'auth:masyarakat'], function() {

	Route::get('/masyarakat/dashboard_masyarakat','MasyarakatController@dashboard');
	Route::get('/masyarakat/pengaduan','MasyarakatController@pengaduan');
	Route::post('/masyarakat/pengaduan','MasyarakatController@post_pengaduan');
	Route::get('/masyarakat/detail_pengaduan/{id}','MasyarakatController@detail_pengaduan');
	Route::get('/masyarakat/profil','MasyarakatController@profil');
	Route::get('/masyarakat/edit_profil','MasyarakatController@edit_profil');
});


Route::group(['middleware' => 'auth:petugas'], function() {

	Route::group(['middleware' => 'checkLevel:admin'], function() {
		Route::get('/admin/dashboard_admin','AdminController@dashboard');
		Route::get('/admin/export_pdf','AdminController@export_pdf');
		Route::get('/admin/detail_pengaduan/{id}','AdminController@detail_pengaduan');
		Route::get('/admin/tanggapan/{id}','AdminController@view_tanggapan');
		Route::post('/admin/tanggapan/{id}','AdminController@tanggapan');
		Route::get('/admin/register_petugas','AdminController@register_petugas');
		Route::get('/admin/data_masyarakat','AdminController@data_masyarakat');
		Route::get('/admin/data_petugas','AdminController@data_petugas');
		Route::post('/admin/data_petugas','AdminController@view_register');
		Route::delete('/admin/delete_data_petugas/{id}','AdminController@delete_data_petugas');
		Route::delete('/admin/delete_data_masyarakat/{id}','AdminController@delete_data_masyarakat');
	});

	Route::group(['middleware' => 'checkLevel:petugas'], function() {
		Route::get('/petugas/dashboard_petugas','PetugasController@dashboard');
		Route::get('/petugas/data_masyarakat','PetugasController@data_masyarakat');
		Route::get('/petugas/detail_pengaduan/{id}','PetugasController@detail_pengaduan');
		Route::get('/petugas/tanggapan/{id}','PetugasController@view_tanggapan');
		Route::post('/petugas/tanggapan/{id}','PetugasController@tanggapan');
	});

});