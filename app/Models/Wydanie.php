<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wydanie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazwa_artykuł',
        'Ilość_wydana'
    ];
    
}
