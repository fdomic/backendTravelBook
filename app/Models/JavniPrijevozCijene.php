<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JavniPrijevozCijene extends Model
{
    protected $table = 'javni_prijevoz_cijene';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'id_javni_prijevoz',
        'karta',
        'opis',
        'trajanje_karte',
        'cijena'
        
    ];
}
