<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Export / Import') }}
    </h2>
</x-slot>

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Import Export Excel to / from database (table livreurs)
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="GET" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import livreur Data</button>

                <a class="btn btn-warning" href="{{ route('export') }}">Export livreur Data</a>
            </form>
        </div>
    </div>
</div>
   
</body>
</html>
</x-app-layout>
