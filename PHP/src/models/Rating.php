<?php namespace Mygamepedia\models;

class Rating extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'rating_board';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function games() {
        return $this->belongsToMany('Mygamepedia\models\Game', 'game2rating', "rating_id", "game_id");
    }
}

