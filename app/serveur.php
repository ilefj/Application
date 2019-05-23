<?php

namespace App;
use App\serveur;
use Illuminate\Database\Eloquent\Model;

class serveur extends Model
{
    protected $fillable = [
        'id','nom','prenom','DDN','Adresse','login','password','Num_tel','Date_embauche','Salaire',
    ];
    protected $table='serveur';
}
