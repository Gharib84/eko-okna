<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Magazyn extends Model
{
    use HasFactory;


    protected $fillable = [
        'magazyn_nazwa'

    ];

    public function users(){
        return $this->hasMany(User::class, 'magazyn_id', 'magazyn_id' );

    }

    
}
