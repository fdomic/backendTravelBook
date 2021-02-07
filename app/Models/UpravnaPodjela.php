<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpravnaPodjela extends Model
{
    protected $table = 'upravna_podjela';
  
    protected $guarded = ['id'];
	
    protected $fillable = [ 
        
        'id_drzave',
        'savezne_drzave_zupanije',
        'stanovnistvo',
        'povrsina'
        
    ];

}
