<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    //use HasFactory;
    protected $fillable = [
    'nomResto',
    'specialite', //choix multiple 
    'ville',
    'rue',
    'code postal',
    'pays',
    'tel',
    'ninea',
    'description',
    'entree',
    'plat',
    'desert',
    'image',
    'reduction',//menu ou carte
];
}
