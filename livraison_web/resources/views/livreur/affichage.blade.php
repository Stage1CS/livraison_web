<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Chercher livreur par nom ') }}
    </h2>
</x-slot>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<h1></h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id_livreur</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>E_mail</th>
                <th>Numero</th>
                <th>Nb_Ajout</th>
                <th>zone</th>
                <th>updated_at</th>
                <th>created_at</th>
                <th>Opération</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($l as $livreur)      
        <tr>
            <td> {{$livreur -> id_livreur}} </td>
            <td> {{$livreur -> nom}} </td>
            <td> {{$livreur -> prénom}} </td>
            <td> {{$livreur -> mail}} </td>
            <td> {{$livreur -> num}}</td>
            <td> {{$livreur ->nb_ajout}} </td>
            <td> {{$livreur -> id_zone}}</td>
            <td> {{$livreur -> updated_at}}</td>
            <td> {{$livreur -> created_at}}</td>
            <td><a href = 'supprimer/{{ $livreur -> id_livreur }}'>Supprimer</a></td>
        </tr>       
    @endforeach
</body>      
</x-app-layout>



