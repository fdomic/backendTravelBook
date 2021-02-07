<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KazalistaCijene extends Model
{
    protected $table = 'kazalista_cijene';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'id_kazalista',
        'karta',
        'opis',
        'trajanje_karte',
        'cijena'
        
    ];
}
