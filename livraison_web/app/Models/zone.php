<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    use HasFactory;

    protected $table = 'zone';

    protected $fillable = [
        'id_zone',
        'nom_zone',
    ];

    protected $primaryKey = 'id_zone';
}
