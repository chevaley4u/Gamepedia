<?php

namespace Mygamepedia\controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Mygamepedia\models\Character;
use Mygamepedia\models\Game;
use Mygamepedia\models\Company;
use Mygamepedia\models\game2genre;
use Mygamepedia\models\Platform;
use Mygamepedia\models\Genre;
class TD3
{
    public static function p1(){
        //1
        echo "<br><br> \n Tous les jeux :\n";
        $time_start = microtime(true);
        foreach (Game::select('*')->get() as $game){
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        //2
        echo "<br><br> \n Tous les jeux qui commencent par 'Mario' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","Mario%")->get() as $game){
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        //3
        echo "<br><br> \n Personnages dont les jeux commencent par 'Mario' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","Mario%")->get() as $game){
            foreach ($game->charac as $char){
            }
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        //4
        echo "<br><br> \n Tous les jeux qui commencent par 'Mario' et qui ont un rating qui contient '3+' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","Mario%")->get() as $game){
            foreach ($game->ratings as $rank){
                if(str_contains($rank->name,"3+")){
                }
            }
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        //5
        echo "<br><br> \n Requête lister les jeux :\n";
        echo "<br><br> \n Tout les jeux qui commence par 'R' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","R%")->get() as $game){
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        echo "<br><br> \n Tout les jeux qui commence par 'V' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","V%")->get() as $game){
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        echo "<br><br> \n Tout les jeux qui commence par 'L' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","L%")->get() as $game){
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        echo "<br><br> \n Creation index de la colonne 'name' et de la table 'game' :\n";
        $time_start = microtime(true);
        Game::table('game', function($table){
           $table->unique('name');
        });
        $time_end = microtime(true);
        Game::table('game', function($table){
            $table->dropUnique('game_name_index');
        });
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";
    }
}

/*
foreach (Game::select("*")->where("name","like","Mario%")->with("ratings")->get() as $game){

        }

foreach (Game::where("name","like","Mario%")->get() as $game){
        }
        */