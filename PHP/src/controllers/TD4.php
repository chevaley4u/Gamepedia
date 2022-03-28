<?php

namespace Mygamepedia\controllers;

use Mygamepedia\models\Game;
use Mygamepedia\models\Utilisateur;
use Mygamepedia\models\Commentaire;
class TD4
{

    public static function p1(){
        $uti = Utilisateur::where("email","like","test@mail")->delete();
        $uti = Utilisateur::where("email","like","test2@mail")->delete();
        $uti = Utilisateur::where("email","like","test3@mail")->delete();

        $u1 = Utilisateur::create([
            "email"=>"test@mail", "nom"=>"Didier", "prenom"=>"Jean", "adresse"=>"6 rue des dames",
            "num_tel"=>06666666, "date_naiss"=>"2002-12-20"
        ])->save();
        $u2 = Utilisateur::create([
            "email"=>"test2@mail", "nom"=>"AAAAA", "prenom"=>"Awa", "adresse"=>"92 rue de la street",
            "num_tel"=>06666666, "date_naiss"=>"2002-03-01"
        ])->save();

        $t =time();
        echo $t;
        /*
        $com1 = Commentaire::create([
            "titre"=>"test","contenu"=>"test","creat_at","update_at","utilisateur_email"=>"test@mail","game_id"=>12342
        ])->save();
        */
    }
}