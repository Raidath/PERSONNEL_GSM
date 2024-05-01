<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'numero',
        'domaine',
        'type',
        'groupe_sanguin',
        'maladie',
        'localisation',
        'nom_pere',
        'nom_mere',
        'numero_pere',
        'numero_mere',
        'numero_urgence',
    ];
}
