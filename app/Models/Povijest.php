<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Povijest extends Model
{
    protected $table = 'povijest';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        'id_drzave',
        'id_grada',
        'razdoblje',
        'opis'
         
    ];
}
