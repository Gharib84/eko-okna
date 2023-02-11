<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrzyjęcieArtykuł extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazwa_artykuł',
        'Ilość_przyjęta',
        'Jednostka_miary',
        'vat',
        'Cena_jednostkowa',
        'file',
        'total'

    ];
}
