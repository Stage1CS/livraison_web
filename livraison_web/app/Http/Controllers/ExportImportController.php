<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\livreurExport;
use App\Imports\livreurImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\livreur;

class ExportImportController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import/ExportImportView');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new livreurExport, 'livreurs.xlsx');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export_pdf() 
    {
        return Pdf::download(new livreurExport, 'livreurs.pdf');
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new livreurImport,request()->file('file'));
             
        return back();
    }
}
