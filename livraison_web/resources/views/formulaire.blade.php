<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Ajouter livreur') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="content">
            <h1>Ajouter un nouveau Livreur</h1>
            <form action=" {{'inscription'}} " method="post">
                {{ csrf_field() }}

                <input type="number" name="id_livreur" placeholder="id"> <br></br>
                <input type="text" name="nom" placeholder="nom"> <br></br>
                <input type="text" name="prénom" placeholder="prenom"> <br></br>
                <input type="email" name="email" placeholder="email" id="email"> <br></br>
                <input type="number" name="num" placeholder="numero"> <br></br>
                <input type="submit" value="inscrire">
            </form>
        </div>
        </div>
    </div>
</div>
</x-app-layout>



            

