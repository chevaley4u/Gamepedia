<?php

namespace Mygamepedia\controllers;

use Mygamepedia\models\Character;
use Mygamepedia\models\Game;
use Mygamepedia\models\Company;
use Mygamepedia\models\Platform;

class TD2{

    public static function q1(){
        echo "<br><br> \n Personnages du Jeu 12342 :\n";
        foreach (Game::where("id","=",12342)->get() as $game) {
           foreach ($game->charac as $chara){
                echo "<br>";
                echo "  " . $chara->name ." : " . $chara->deck . "\n" ;
            }
        }
        
        echo "\n";
    }
    public static function q2(){
        echo "<br> <h2> Personnages des jeux commençant par Mario : </h2> <br>";
        foreach (Game::where("name", "like", "Mario%")->get() as $jeux) {
            echo "titre : " . $jeux->name . "<br>";
            foreach ($jeux->charac as $persos){
                echo "personnage : " . ($persos->name) . "<br>";
            }
            echo "<br>";
        }
    }
}