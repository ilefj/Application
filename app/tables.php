<?php

namespace App;
use App\tables;

use Illuminate\Database\Eloquent\Model;

class tables extends Model
{
    protected $fillable = [
        'id','CodeTable','Nbreplace','etat',
   ];
   protected $table='tables';
}
