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
        echo "<br><br> \n Personnages des jeux commençant par Mario :\n";
        
    }


    public static function q3()
    {
        echo "<br><br> \n les jeux développés par une compagnie dont le nom contient Sony \n <br><br>";
        foreach (Company::where("name", "like", '%' . 'Sony' . '%')->get() as $company) {
            echo $company->name . "<br><br>";
            foreach ($company->games as $game) {
                echo $game->name . "<br>";
            }
            echo "<br> <br>";
        }
    }

    public static function q4(){
        echo "<br><br> \n Rating des jeux dont le nom contient Mario :\n";
        foreach (Game::where("name","like","%Mario%")->get() as $games){
            foreach ($games->ratings as $rank){
                echo "<br><br>";
                echo " ".$games->name." | ".$rank->name." : ".$rank->deck;
            }
        }
    }
}