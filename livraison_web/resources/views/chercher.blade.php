<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Chercher livreur ') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="content">
           
                <h2>Entrer le nom du livreur</h2>
                <form action=" {{'chercher'}} " method="get">
                    {{ csrf_field() }}
                        <input type="text" name="nom" placeholder="nom"> <br></br>
                        <input type="submit" value="chercher">
                </form>

            @if (Route::has('Prénom'))    
                <h2>Entrer le prenom du livreur</h2>
                <form action=" {{'recherche'}} " method="get">
                    {{ csrf_field() }}
                        <input type="text" name="prenom" placeholder="prenom"> <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif

            @if (Route::has('e_mail'))
                
                <h2>Entrer l'e_mail du livreur</h2>
                <form action=" {{'recherche'}} " method="get">
                    {{ csrf_field() }}
                        <input type="email" name="email" placeholder="eamil"> <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif 

            @if (Route::has('Numéro'))
                
                <h2>Entrer le numero du livreur</h2>
                <form action=" {{'recherche'}} " method="get">
                    {{ csrf_field() }}
                        <input type="text" name="numero" placeholder="numero"> <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif    
   
        </div>
        </div>
    </div>
</div>
</x-app-layout>
