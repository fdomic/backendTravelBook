<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gradovi extends Model
{
    protected $table = 'gradovi';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'naziv_grada',
        'id_drzave',
        'gradonacelnik',
        'povrsina',
        'nadmorska_visina',
        'stanovnistvo',
        'valuta',
        'postanski_broj',
        'pozivni_broj',
        'slika',
        'sluzbena_stranica',
        
    ];

}
