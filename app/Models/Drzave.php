<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drzave extends Model
{
    protected $table = 'drzave';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        'naziv_drzave',
        'glavni_grad',
        'sluzbeni_jezik',
        'predsjednik',
        'predsjednik_vlade',
        'neovisnost',
        'povrsina',
        'stanovnistvo',
        'valuta',
        'pozivni_broj',
        'slika',
        'sluzbena_stranica',
         
    ];
}
