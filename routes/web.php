<?php

Route::get('/', function () {

	return view ('Welcome');
})-> name('welcome'); 



Route::get('/articoli', function () {

    $title='articoli';

	return view ('articoles', [
		'title'=>$title,
	]);
})-> name('article'); 



Route::get('/contatti', function () {

	return view ('contacts');
})-> name('contacts'); 



Route::get('/chi-siamo', function () {

	return view ('about_us');
})-> name('about_us'); 
