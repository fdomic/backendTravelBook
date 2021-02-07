<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoznateZnamenitostiCijene extends Model
{
    protected $table = 'poznate_znamenitosti_cijene';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'id_poznate_znamenitosti',
        'karta',
        'opis',
        'trajanje_karte',
        'cijena'
        
    ];
}
