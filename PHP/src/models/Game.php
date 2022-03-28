<?php namespace Mygamepedia\models;

class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function charac() {
        return $this->belongsToMany('Mygamepedia\models\Character', 'game2character', "game_id", "character_id");
    }
}

