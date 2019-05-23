<?php

namespace App;
use App\Platss;
use Illuminate\Database\Eloquent\Model;

class Platss extends Model
{
    protected $fillable = [
        'idPlat','id','NomCat', 'idsousCat', 'nom','NomSousCat','Composition','prix',
    ];
    protected $table='Platss';
    protected  $primaryKey = 'idPlat';

}
