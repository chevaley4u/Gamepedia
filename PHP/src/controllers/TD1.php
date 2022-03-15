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
            echo "<br><br> \n Platformes dont la base installée est >= 10 000 000 :\n";
                 foreach (Platform::where("install_base", ">=", 10000000)->get() as $plat) {
                      echo "<br>";
                      echo "  " . $plat->name . "\n";
                 }
            echo "\n";
       }

       public static function q4(){
          echo "<br><br> \n 442 jeux à partir du 21173ème :\n";
               foreach(Game::where("id",">=",21173)->where("id","<",21615)->get() as $i=>$games){
                    echo "<br>";
                    echo  $i  . $games->name . "\n";
               }
       }
       

       public static function q5(){
          if(isset($_GET['page']) && !empty($_GET['page'])){
               $currentPage = (int) strip_tags($_GET['page']);
           }else{
               $currentPage = 1;
           }
           $nbjeu =Game::select("*")->count();
           $parPage = 500;
           $pages = ceil($nbjeu / $parPage); 
           $var1 = ($currentPage -1)  * $parPage;
           if($currentPage != $pages){
               $pageSuivante = $currentPage + 1; 
           }else{
               $pageSuivante = $pages;
           }
           if($currentPage != 1){
               $pagePrécédente = $currentPage - 1; 
           }else{
               $pagePrécédente = 1;
           }
           echo "Pages actuelle " . $currentPage . "/" . $pages ."<br>";
           echo " <a href='./?page=$pagePrécédente' class='page-link'>Page précédente</a>  ";
           echo " <a href='./?page=$pageSuivante' class='page-link'>Page suivante       </a>";
           
           foreach(Game::where("id",">=",$var1)->where("id","<",($var1+500))->get() as $i=>$games){
               echo "<br>";
               echo  $games->id . " " . $games->name . "\n";
          }
       
         

         
           
             
     }
}    