<?php

namespace Mygamepedia\controllers;

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
        echo "<br><br> \n Tout les jeux :\n";
        $time_start = microtime(true);
        foreach (Game::select('*')->get() as $game){
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        //2
        echo "<br><br> \n Tout les jeux qui commence par 'Mario' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","Mario%")->get() as $game){
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        //3
        echo "<br><br> \n Personnage dont les jeux commence par 'Mario' :\n";
        $time_start = microtime(true);
        foreach (Game::where("name","like","Mario%")->get() as $game){
            foreach ($game->charac as $char){
            }
        }
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "<br><br> temps d'exécution : ".$time." msec";

        //4
        echo "<br><br> \n Tout les jeux qui commence par 'Mario' et qui on un rating qui contient '3+' :\n";
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
    }
}