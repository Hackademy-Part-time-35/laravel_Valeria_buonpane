<?php

Route::get('/', function () {

	return view ('welcome', [
		'title'=>'Home - Presto.it',
		'titleh1'=>'Home',
		'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
	]);
})->name('welcome'); 



Route::get('/articoli', [App\Http\Controllers\PageController::class, 'articles'])->name('articles'); 


Route::get('/articoli/{id}', function ($id = null) {
    
	$articles = [
		['title' => 'Titolo articolo #1', 'categoria' => 'CATEGORIA: loft', 'description' => 'esempio description 1'],
		['title' => 'Titolo articolo #2', 'categoria' => 'CATEGORIA: ville al mare', 'description' => 'esempio description 2'],
		['title' => 'Titolo articolo #3', 'categoria' => 'CATEGORIA: ville in montagna', 'description' => 'esempio description 3'],
	];

	if(!array_key_exists($id, $articles)) {
		abort(404); //questa funzione restituisce una pg errore 404
	}

	
	$articles = $articles[$id];

	return view('article',['article'=> $article]);
   
})->name('articles.show');



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
