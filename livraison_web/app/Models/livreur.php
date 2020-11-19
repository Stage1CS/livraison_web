<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livreur extends Model
{
    use HasFactory;


    protected $table = 'livreurs';

    protected $fillable = [
        'id_livreur',
        'nom',
        'prénom',
        'mail',
        'nb_ajout',
        'id_zone',
        'updated_at',
        'created_at',
    ];

    protected $primaryKey = 'id_livreur';

    public $incrementing = true;

}
