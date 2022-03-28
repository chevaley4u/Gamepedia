<?php namespace Mygamepedia\models;

class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function charac() {
        return $this->belongsToMany('Mygamepedia\models\Character', 'game2character', "game_id", "character_id");
    }

    public function ratings(){
        return $this->belongsToMany('Mygamepedia\models\Rating','game2rating','game_id','rating_id');
    }

    public function company(){
        return $this->belongsToMany('Mygamepedia\models\Company','game_publishers','game_id','comp_id');
    }

    public function commentaires(){
        return $this->hasMany('Mygamepedia\models\Commentaire','game_id');
    }
}

