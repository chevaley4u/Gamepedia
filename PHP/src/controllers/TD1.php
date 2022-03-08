<?php

namespace Mygamepedia\controllers;

use Mygamepedia\models\Game;
use Mygamepedia\models\Company;
use Mygamepedia\models\Platform;

class TD1{

       public static function q1():void{
            echo "<br><br> \n Jeux avec 'Mario' dans leur nom :\n";
                 foreach (Game::where("name", "like", "%Mario%")->get() as $game) {
                      echo "<br>";
                      echo "  " . $game->name . "\n";
                 }
            echo "\n";
       }

       public static function q2(){
            echo "<br><br> \n Compagnies installées au Japon :\n";
                 foreach (Company::where("location_country", "like", "%Japan%")->get() as $comp) {
                      echo "<br>";
                      echo "  " . $comp->name . "\n";
                 }
            echo "\n";
       }

       public static function q3(){

       }

       public static function q4(){

       }
}