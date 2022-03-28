<?php namespace Mygamepedia\models;

class Board extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'rating_board';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function ratings() {
        return $this->hasMany('Mygamepedia\models\Board','rating_board_id');
    }
}
