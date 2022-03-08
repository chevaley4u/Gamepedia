<?php

namespace Mygamepedia\controllers;

use Mygamepedia\models\Game;
use Mygamepedia\models\Company;
use Mygamepedia\models\Platform;

class TD1{

       public function __construct(){

       }

       public static function q1():void{
            echo "Jeux avec 'Mario' dans leur nom :\n";
                 foreach (Game::where("name", "like", "%Mario%")->get() as $game) {
                      echo "  " . $game->name . "\n";
                 }
       }

       public function q2(){

       }

       public function q3(){

       }

       public function q4(){

       }
}