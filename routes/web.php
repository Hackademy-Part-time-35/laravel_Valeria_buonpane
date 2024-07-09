<?php

Route::get('/', [App\Http\Controllers\PageController::class, 'welcome'])->name('welcome'); 


Route::get('/articoli', [App\Http\Controllers\PageController::class, 'articles'])->name('articles'); 


Route::get('/articoli/{id}', [App\Http\Controllers\PageController::class, 'article' ])->name('articles.show');



Route::get('/contatti', [App\Http\Controllers\PageController::class, 'contacts' ])->name('contacts'); 



Route::get('/chi-siamo', [App\Http\Controllers\PageController::class, 'aboutUs' ] )->name('about_us'); 
