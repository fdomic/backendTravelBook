<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klubovi extends Model
{
    protected $table = 'klubovi';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        'id_grada',
        'ime_gradevine',
        'arhitekt',
        'godina_izgradnje',
        'opis_kraci',
        'opis_duzi',
        'adresa',
        'sluzbena_stranica',
        'slika'
    ];
}
