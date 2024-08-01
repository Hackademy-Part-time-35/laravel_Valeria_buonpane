<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{   
    public function searchUsers(){
        return view('account.users-list');
    }

    private $articles;

    public function __construct(){
        $this->articles = [
            ['title' => 'Titolo articolo #1', 'category' => 'CATEGORIA: loft', 'description' => 'esempio description 1', 'visible' => true],
            ['title' => 'Titolo articolo #2', 'category' => 'CATEGORIA: ville al mare', 'description' => 'esempio description 2', 'visible' => true],
            ['title' => 'Titolo articolo #3', 'category' => 'CATEGORIA: ville in montagna', 'description' => 'esempio description 3', 'visible' => true],
        ];


    }


    public function welcome(){
    
        return view('welcome', [
            'title'=>'Home - Presto.it',
            'titleh1'=>'Home',
            'description'=> 'Qui si inserisce il testo che vogliamo aggiungere',
            'message' => 'Sconto del 10% per i nuovi iscritti alla newsletter',
        ]);
    }


    public function articles(){
        $title = 'Articoli';
        
        $titleIsvibible = true;


        return view ('articles', [
            'title' => 'Articoli - Presto.it',
            'titleh1' => 'Articoli',
            'description' => 'Qui si inserisce il testo che vogliamo aggiungere',
            'articles' => $this ->articles,
            'titleIsVisible' => $titleIsvibible,
            'message' => 'Sconto del 10% per i nuovi iscritti alla newsletter',
        ]);
    }

    public function article($id){
        
            if(!array_key_exists($id, $this ->articles)) {
                abort(404); //questa funzione restituisce una pg errore 404
            };
        
            
            $article = $this ->articles[$id];
        
            return view('article',['article'=> $article]);
           
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
