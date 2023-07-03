@extends('./layouts/app')

@section('page-content')
<form action="/accueil" class="corpus" method="POST">
    @method('post')
                    <label for="nom">Nom:</label>
                    <input id="nom" type="text" name="nom" >
                    <br><br>
                    <label for="prenom">Prénom:</label>
                    <input id="prenom" type="text" name="prenom" >
                    <br><br>
                    <label for="contact">Contact:</label>
                    <input id="contact" type="number" name="contact" ><br><br>  
                    <button type="submit"> Valider</button>
</form>

@endsection
