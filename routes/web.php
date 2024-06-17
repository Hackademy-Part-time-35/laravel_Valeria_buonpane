<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, "home"])->name("homepage"); 

Route::get('/articoli', [PageController::class, "articles"])->name("articles");

Route::get('/articolo/{id}', [PageController::class, "article"])->name("article");

Route::get('/contatti', [PageController::class, "contacts"])->name("contacts");

Route::get('/chi-sono', [PageController::class, "about_us"])->name("about_us");
