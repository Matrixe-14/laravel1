@extends('./layouts/app')

@section('page-content')
<form action="/accueil" method="POST">
    @method('post')
    @csrf
<div class="container">
  <div class="header">
    <div class="title">Formulaire d'inscription</div>
  </div>
  <div class="main">
  <div class="left-section">
      <div class="item">
        <div class="text">Nom</div>
        <input type="text">
      </div>
      <div class="item">
        <div class="text">Prénom</div>
        <input type="text">
      </div>
      <div class="item">
        <div class="text">Pays</div>
        <input type="text">
      </div>
      <div class="item">
        <div class="text">Ville</div>
        <input type="text">
      </div>
      <div class="item">
        <div class="text">Résidence</div>
        <input type="text">
      </div>
      <div class="item">
        <div class="text">Contact</div>
        <input type="text">
      </div>
    </div>
   <span class="line"></span>
  <div class="right-section">
    <div class="circle">
      <div class="img"></div>
    </div>
    <div class="link">
      <div class="title">Réseaux sociaux</div>
      <div class="icons fb">
        <div class="img"></div>
        <div class="connect" style="color:#52E28C;">Connexion</div>
      </div>
      <div class="icons twiter">
        <div class="img"></div>
        <a href="#"><div class="connect">Link</div></a>
      </div>
      <div class="icons insta">
        <div class="img"></div>
        <a href="#"><div class="connect">Link</div></a>
      </div>
    </div>
    <div class="btn">
      <button type="button">Valider</button>
    </div>
  </div>
  </div>
</div>
</form>

@endsection
