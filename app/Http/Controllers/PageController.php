<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    public function welcome(){
    
        return view('welcome', [
            'title'=>'Home - Presto.it',
            'titleh1'=>'Home',
            'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
        ]);
    }


    public function articles(){
        $title = 'Articoli';
        
        $titleIsvibible = false;

        $articles = [
            ['title' => 'Titolo articolo #1', 'category' => 'CATEGORIA: loft', 'description' => 'esempio description 1', 'visible' => true],
            ['title' => 'Titolo articolo #2', 'category' => 'CATEGORIA: ville al mare', 'description' => 'esempio description 2', 'visible' => true],
            ['title' => 'Titolo articolo #3', 'category' => 'CATEGORIA: ville in montagna', 'description' => 'esempio description 3', 'visible' => true],
        ];


        return view ('articles', [
            'title' => 'Articoli - Presto.it',
            'titleh1' => 'Articoli',
            'description' => 'Qui si inserisce il testo che vogliamo aggiungere',
            'articles' => $articles,
            'titleIsVisible' => $titleIsvibible,
        ]);
    }

    public function article($id){
        function ($id = null) {
	
            $articles = [
                ['title' => 'Titolo articolo #1', 'categoria' => 'CATEGORIA: loft', 'description' => 'esempio description 1'],
                ['title' => 'Titolo articolo #2', 'categoria' => 'CATEGORIA: ville al mare', 'description' => 'esempio description 2'],
                ['title' => 'Titolo articolo #3', 'categoria' => 'CATEGORIA: ville in montagna', 'description' => 'esempio description 3'],
            ];
        
            if(!array_key_exists($id, $articles)) {
                abort(404); //questa funzione restituisce una pg errore 404
            };
        
            
            $articles = $articles[$id];
        
            return view('article',['article'=> $article]);
           
        };
    }

    public function contacts() {

        return view ('contacts', [
            'title'=>'Contatti - Presto.it',
            'titleh1'=>'Contatti',
            'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
        ]);
    }

    public function aboutUs(){
        function (){

            return view ('about_us', [
                'title'=>'Chi siamo - Presto.it',
                'titleh1'=>'Chi siamo',
                'description'=> 'Qui si inserisce il testo che vogliamo aggiungere'
            ]);
        };
    }


}