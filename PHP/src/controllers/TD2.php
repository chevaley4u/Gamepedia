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
        echo "<br><br> \n Jeux dont le nom débute par Mario et le rating contient 3+  :\n";
        foreach (Game::where("name","like","Mario%")->get() as $games){
            foreach ($games->ratings as $rank){
                if(str_contains($rank->name,"3+")){
                    echo "<br>";
                    echo $games->name." : ".$rank->name;
                }
            }
        }

    }

    public static function q7(){
        echo "<br> <h2> Personnages des jeux commençant par Mario, publiés par une compagnie dont le nom contient'Inc.' et dont le rating initial contient '3+'</h2> <br>";
        foreach (Game::where("name","like","Mario%")->get() as $games){
            foreach ($games->company as $comp){
                if(str_contains($comp->name,"Inc.")){
                    foreach ($games->ratings as $rank){
                        if(str_contains($rank->name,"3+")){
                                echo $games->name." : published by ".$comp->name." ; ranking :".$rank->name." ;<br>";

                        }
                    }
                }
            }
        }
        
    }

    public static function q8(){
        echo "<br><br> \n Jeux dont le nom débute par Mario, publiés par une compagnie dont le nom contient 'Inc.', dont le rating contient 3+ et ayant reçu un avis de la part du rating board nommé 'CERO'   :\n";
        $nb = 0;
        foreach (Game::where("name","like","Mario%")->get() as $games){
            foreach ($games->company as $comp){
                if(str_contains($comp->name,"Inc.")){
                    foreach ($games->ratings as $rank){
                        if(str_contains($rank->name,"3+")){
                            $b = $rank->board->first();
                            if($b->name == "CERO"){
                                $nb ++;
                                echo "<br>";
                                echo $games->name." : published by ".$comp->name." ; ranking :".$rank->name." ; board :".$b->name;
                            }
                        }
                    }
                }
            }
        }
        if($nb === 0){
            echo "<br>";
            echo "Aucun jeu ne correspond à la selection";
        }
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