<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>Nouveau Livreur</title>
        <!-- Styles etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Ajouter un nouveau Livreur</h1>
                <form action=" {{'inscription'}} " method="post">
                    {{ csrf_field() }}

                    <input type="number" name="id_livreur" placeholder="id"> <br></br>
                    <input type="text" name="nom" placeholder="nom"> <br></br>
                    <input type="text" name="prénom" placeholder="prenom"> <br></br>
                    <input type="text" name="email" placeholder="email" id="email"> <br></br>
                    <input type="number" name="num" placeholder="numero"> <br></br>
                    <input type="number" name="nb_ajout" placeholder="nb_ajout"> <br></br>
                    <input type="number" name="id_zone" placeholder="nb_zone"> <br></br>
                    <input type="submit" value="inscrire">
                </form>
                
            </div>
        </div>
    </body>
    </html>