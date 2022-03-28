<?php

namespace Mygamepedia\controllers;

use Mygamepedia\models\Character;
use Mygamepedia\models\Game;
use Mygamepedia\models\Company;
use Mygamepedia\models\Platform;

class TD2{

    public static function q1(){
        echo "<br><br> \n Personnages du Jeu 12342 :\n";
        foreach (Character::with("game2character")->were("game_id","=",12342)->get() as $chara) {
            foreach ($chara->Game as $game){
                echo "<br>";
                echo "  " . $chara->name ." : " . $chara->deck . "\n";
            }
        }
        echo "\n";
    }
    public static function q2(){
        echo "<br><br> \n Personnages des jeux commençant par Mario :\n";
        
    }
}