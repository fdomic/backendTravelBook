<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DvorciCijene extends Model
{


    protected $table = 'Dvorci_cijene';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'id_dvorci',
        'karta',
        'opis',
        'trajanje_karte',
        'cijena'
        
    ];
}
