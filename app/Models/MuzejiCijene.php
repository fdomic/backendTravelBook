<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuzejiCijene extends Model
{
    protected $table = 'muzeji_cijene';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'id_muzeji',
        'karta',
        'opis',
        'trajanje_karte',
        'cijena'
        
    ];
}