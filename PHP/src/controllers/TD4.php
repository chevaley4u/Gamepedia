<?php

namespace Mygamepedia\controllers;

use Faker\Factory;
use Mygamepedia\models\Game;
use Mygamepedia\models\Utilisateur;
use Mygamepedia\models\Commentaire;
class TD4
{

    public static function p1(){
        //Supp data
        $uti = Utilisateur::where("email","like","test@mail")->delete();
        $uti = Utilisateur::where("email","like","test2@mail")->delete();
        $uti = Utilisateur::where("email","like","test3@mail")->delete();
        foreach(Commentaire::where("utilisateur_email","like","test@mail")->get() as $coms){
               $coms->delete();
        }
        foreach(Commentaire::where("utilisateur_email","like","test2@mail")->get() as $coms){
            $coms->delete();
        }

        //Create util
        $u1 = Utilisateur::create([
            "email"=>"test@mail", "nom"=>"Didier", "prenom"=>"Jean", "adresse"=>"6 rue des dames",
            "num_tel"=>"06666666", "date_naiss"=>"2002-12-20"
        ])->save();
        $u2 = Utilisateur::create([
            "email"=>"test2@mail", "nom"=>"AAAAA", "prenom"=>"Awa", "adresse"=>"92 rue de la street",
            "num_tel"=>"06666666", "date_naiss"=>"2002-03-01"
        ])->save();

        //Comm 1st util
        $t = date('Y-m-d H:i:s');
        echo $t;

        $com1 = Commentaire::create([
            "titre"=>"test","contenu"=>"test","create_at"=>$t,"update_at"=>$t,"utilisateur_email"=>"test@mail","game_id"=>12342
        ])->save();
        $t = date('Y-m-d H:i:s');
        $com1 = Commentaire::create([
            "titre"=>"test2","contenu"=>"test32","create_at"=>$t,"update_at"=>$t,"utilisateur_email"=>"test@mail","game_id"=>12342
        ])->save();
        $t = date('Y-m-d H:i:s');
        $com1 = Commentaire::create([
            "titre"=>"test3","contenu"=>"te764","create_at"=>$t,"update_at"=>$t,"utilisateur_email"=>"test@mail","game_id"=>12342
        ])->save();

        //Comm 2em util
        $t = date('Y-m-d H:i:s');
        $com1 = Commentaire::create([
            "titre"=>"walla la diguerie","contenu"=>"test","create_at"=>$t,"update_at"=>$t,"utilisateur_email"=>"test2@mail","game_id"=>12342
        ])->save();
        $t = date('Y-m-d H:i:s');
        $com1 = Commentaire::create([
            "titre"=>"test 2267","contenu"=>"je teste","create_at"=>$t,"update_at"=>$t,"utilisateur_email"=>"test2@mail","game_id"=>12342
        ])->save();
        $t = date('Y-m-d H:i:s');
        $com1 = Commentaire::create([
            "titre"=>"...","contenu"=>"te764","create_at"=>$t,"update_at"=>$t,"utilisateur_email"=>"test2@mail","game_id"=>12342
        ])->save();
    }

    public static function p2(){
        $faker = Factory::create();

        for($i = 0;$i <25000; $i++){
            $tab=explode(" ",$faker->name());
            $e=$faker->unique()->email;
            $u = Utilisateur::create([
                "email"=>$e, "nom"=>$tab[1], "prenom"=>$tab[0], "adresse"=>$faker->address(),
                "num_tel"=>$faker->phoneNumber(), "date_naiss"=>$faker->date()
            ])->save();
            $random = rand(1,10);
            for($co = 0;$co<$random;$co++){
                $game = Game::select('id')->inRandomOrder()->first();
                $c = Commentaire::create([
                    "titre"=>$faker->title(),"contenu"=>$faker->text(),"create_at"=>$faker->dateTime(),"update_at"=>$faker->dateTime,"utilisateur_email"=>$e,"game_id"=>$game->id
                ])->save();
            }
        }
    }

}