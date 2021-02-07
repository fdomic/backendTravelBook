<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zemljopis extends Model
{
    protected $table = 'zemljopis';
  
    protected $guarded = ['id'];
	
    protected $fillable = [
       
        'reljef_tekst',
        'klima_tekst',
        'flora_tekst',
        'rijeke_tekst'
         
    ];
}
