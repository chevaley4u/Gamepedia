<?php namespace Mygamepedia\models;

class Rating extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game_rating';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function games() {
        return $this->belongsToMany('Mygamepedia\models\Game', 'game2rating', "rating_id", "game_id");
    }

    public function board() {
        return $this->belongsTo('Mygamepedia\models\Board','rating_board_id');
    }
}

