<?php

namespace App\Imports;

use App\Models\livreur;
use Maatwebsite\Excel\Concerns\ToModel;

class livreurImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new livreur([
            'id_livreur' => $row['id_livreur'],    
            'nom'        => $row['nom'],
            'prenom'     => $row['prenom'],
            'email'      => $row['email'], 
            //'password'   => \Hash::make($row['password']),
            'numero'     => $row['numero'], 
        ]);
    }
}
