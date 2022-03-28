<?php namespace Mygamepedia\models;

class Utilisateur extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'email';
    public $timestamps = false;
    public $fillable = ["email", "nom", "prenom", "adresse", "num_tel", "date_naiss"];

    public function comm() {
        return $this->hasMany('Mygamepedia\models\Commentaire','utilisateur_email');
    }
}