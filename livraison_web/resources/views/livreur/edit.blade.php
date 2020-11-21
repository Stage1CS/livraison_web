<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mettre à jour livreur ') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="content">
                <form action=" {{Route('update.livreur')}} " method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="livreur_id" value="{{$data ['id_livreur']}}">
                    <input type="text" name="nom" value="{{$data ['nom']}}"> <br></br>
                    <input type="text" name="prénom" value="{{$data ['prénom']}}"> <br></br>
                    <input type="email" name="email" value="{{$data ['mail']}}"> <br></br>
                    <input type="number" name="num" value="{{$data ['num']}}"> <br></br>
                    <select name="zone"  value="{{DB::table ('zone')->where('nom_zone', $data['id_zone'])->first()}}"> 
                        <option >bab_zouar</option>
                        <option >oued_smar</option>
                    </select> <br></br>
                    <input type="submit" value="Mettre à jour">
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>