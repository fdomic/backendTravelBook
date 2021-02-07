<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoznataDijela extends Model
{
 
    protected $table = 'poznata_dijela';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        'id_muzeja',
        'ime',
        'tvorac_dijela',
        'opis_kraci',
        'opis_duzi',
        'datum',
        'slika',

    ];

    
}
