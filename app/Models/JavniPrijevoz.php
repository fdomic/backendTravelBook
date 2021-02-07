<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JavniPrijevoz extends Model
{
   
    protected $table = 'gradovi';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        'id_drzave',
        'vrsta_prijevoza',
    ];
}
