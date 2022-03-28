<?php namespace Mygamepedia\models;

class Genre extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'name'];

}

