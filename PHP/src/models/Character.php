<?php namespace Mygamepedia\models;

class Character extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'character';
    protected $primaryKey = 'id' ;
    public $timestamps = false ;

    public function games(){
        return $this->belongsToMany('\Character\models\Game', 'game2character', "character_id", "game_id");
    }
}