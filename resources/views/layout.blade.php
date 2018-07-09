<!doctype html>
<!-- HEADER -->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dubois Industrie</title>
        <link rel="stylesheet" href="../resources/assets/sass/app.scss">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css" />
       
    </head>
<!-- END HEADER -->
    
<body>
<nav class="navbar is-light">
  <div class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="http://www.dubois-industries.fr/" target="_blank">
      <img src="http://www.dubois-industries.fr/image_013.gif" alt="logo Dubois Industrie">
      </a>
      @include ('partials/navbar-item', ['lien'=>'/', 'texte'=>'Accueil'])
     @auth{{-- ou @if (auth()->check()): les 2 sont identiques--}}
      @include ('partials/navbar-item', ['lien'=>auth()->user()->email, 'texte'=>auth()->user()->email])
      @endauth{{-- ou @endif --}}
    </div>
    <div class="navbar-end">
      @auth{{-- ou @if (auth()->check()) --}}
        @include ('partials/navbar-item', ['lien'=>'mon-compte', 'texte'=>'Mon compte'])
        @include ('partials/navbar-item', ['lien'=>'deconnexion', 'texte'=>'Deconnexion'])
      @else
        @include ('partials/navbar-item', ['lien'=>'connexion', 'texte'=>'Connexion']) 
        @include ('partials/navbar-item', ['lien'=>'inscription', 'texte'=>'Inscription'])
      @endauth{{-- ou @endif --}}
    </div>
  </div>
</nav>

<div class="container">
@include('flash::message')

@yield ('contenu')

</div>

</body>
<!-- FOOTER -->
</html>
<!-- END FOOTER -->
