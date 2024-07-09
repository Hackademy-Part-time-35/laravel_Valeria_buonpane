<?php

Route::get('/', function () {

	return view ('welcome', [
		'title'=>'Home - Presto.it',
		'titleh1'=>'Home',
		'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
	]);
})->name('welcome'); 



Route::get('/articoli', [App\Http\Controllers\PageController::class, 'articles'])->name('articles'); 


Route::get('/articoli/{id}', [App\Http\Controllers\PageController::class, 'article' ])->name('articles.show');



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
