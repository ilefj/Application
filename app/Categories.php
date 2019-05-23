<?php

namespace App;
use App\Categories;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $fillable = [
        'id', 'NomCat','image',
    ];
    protected $table='Categories';

}
