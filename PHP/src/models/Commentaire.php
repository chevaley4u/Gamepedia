<?php namespace Mygamepedia\models;

class Commentaire extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'commentaire';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = ["titre","contenu","create_at","update_at","utilisateur_email","game_id"];

    public function utilisateur() {
        return $this->belongsTo('Mygamepedia\models\Utilisateur','utilisateur_email');
    }

    public function game(){
        return $this->belongsTo('Mygamepedia\models\Commentaire','game_id');
    }
}