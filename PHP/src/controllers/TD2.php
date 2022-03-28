<?php

namespace Mygamepedia\controllers;

use Mygamepedia\models\Character;
use Mygamepedia\models\Game;
use Mygamepedia\models\Company;
use Mygamepedia\models\game2genre;
use Mygamepedia\models\Platform;
use Mygamepedia\models\Genre;

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


    public static function q3()
    {
        echo "<br><br> \n les jeux développés par une compagnie dont le nom contient Sony \n <br><br>";
        foreach (Company::where("name", "like", '%'. 'Sony' . '%')->get() as $company) {
            echo $company->name . "<br><br>";
            foreach ($company->games as $game) {
                echo $game->name . "<br>";
            }
            echo "<br> <br>";
        }
    }

    public static function q4(){
        echo "<br><br> \n Rating des jeux dont le nom contient Mario :\n";
        foreach (Game::where("name","like","Mario%")->get() as $games){
            foreach ($games->ratings as $rank){
                echo "<br><br>";
                echo " ".$games->name." : ".$rank->name;
            }
        }
    }

    public static function q5(){
        echo "<br><br> \n les jeux dont le nom débute par Mario et ayant plus de 3 personnages        \n";
        foreach (Game::where("name","like","Mario%")->get() as $games){
            $i = 0;
            foreach ($games->charac as $chara){
               $i++;
            }
            if($i >=3){
                echo $games->name . "<br>";
            }
        }
    }


    public static function q6(){

    }

    public static function q7(){

    }

    public static function q8(){

    }

    public static function q9(){

        $id1 = Genre::where("id","=","51");
        $id1->delete();

        foreach(game2genre::where("genre_id","=","51")->get() as $del){
            $del->delete();
        }

        $genre = Genre::create([
            'id' => '51' , 'name' => 'test'
        ]);
        $genre->save();

        $game1 = game2genre::create([
            'game_id' => '12' , 'genre_id' => '51'
        ]);
        $game2 = game2genre::create([
            'game_id' => '56' , 'genre_id' => '51'
        ]);
        $game3 = game2genre::create([
            'game_id' => '12' , 'genre_id' => '51'
        ]);
        $game4 = game2genre::create([
            'game_id' => '345' , 'genre_id' => '51'
        ]);

        $game1->save();     
        $game2->save();
        $game3->save();
        $game4->save();


    }   

}