<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KluboviCijene extends Model
{
    protected $table = 'klubovi_cijene';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'id_klubovi',
        'karta',
        'opis',
        'trajanje_karte',
        'cijena'
        
    ];
}
