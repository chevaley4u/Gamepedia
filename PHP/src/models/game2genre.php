<?php namespace Mygamepedia\models;

class game2genre extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game2genre';
    public $timestamps = false;
    protected $fillable = ['game_id', 'genre_id'];

}