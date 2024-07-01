<?php

Route::get('/', function () {

	return view ('welcome', [
		'title'=>'Home - Presto.it',
		'titleh1'=>'Home',
		'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
	]);
})->name('welcome'); 



Route::get('/articoli', function () {

	$articles = [
		['title' => 'Titolo articolo #1'],
		['title' => 'Titolo articolo #1'],
		['title' => 'Titolo articolo #1'],
	];


	return view ('articles', [
		'title'=>'Articoli - Presto.it',
		'titleh1'=>'Articoli',
		'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
		'articles'=> $articles,
	]);
})->name('articles'); 



Route::get('/contatti', function () {

	return view ('contacts', [
		'title'=>'Contatti - Presto.it',
		'titleh1'=>'Contatti',
		'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
	]);
})->name('contacts'); 



Route::get('/chi-siamo', function () {

	return view ('about_us', [
		'title'=>'Chi siamo - Presto.it',
		'titleh1'=>'Chi siamo',
		'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
	]);
})->name('about_us'); 
