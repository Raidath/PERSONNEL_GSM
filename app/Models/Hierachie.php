<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hierachie extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'departement_id',
    ];
}
