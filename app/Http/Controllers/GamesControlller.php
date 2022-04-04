<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesControlller extends Controller
{
    public function index(){
        $videogames = array('Fifa 22','NBA 22','Mario Kart','Super Mario');
        return view('index', ['videogames' => $videogames]);
    }

    public function create(){
        return view('create');
    }

    public function help($name_game, $categorie =null){
        $date = now();
        return view('show', ['name_game' => $name_game,
                            'categorie' => $categorie,
                            'date' => $date]);
    }

    public function consuapi(){
        $url = 'https://www.breakingbadapi.com/api/';
        
        $getcharacters = Http::get('https://www.breakingbadapi.com/api/characters');

        $characters = $getcharacters->json();

        return view('api', ['characters' => $characters]);
    }
}
