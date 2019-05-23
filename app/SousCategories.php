<?php

namespace App;
use App\Souscategories;
use Illuminate\Database\Eloquent\Model;

class SousCategories extends Model

    {
        protected $fillable = [
'idsousCat','NomCat','NomSousCat','image',
        ];
        protected $table='SousCategories';
        protected  $primaryKey = 'idsousCat';

   }  
    
    

