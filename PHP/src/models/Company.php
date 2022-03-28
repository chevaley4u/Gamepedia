<?php namespace Mygamepedia\models;

class Company extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'company';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function games() {
        return $this->belongsToMany('Mygamepedia\models\Game', 'game_developers', "comp_id", "game_id");
    }
}