@extends('layout')

@section('contenu')
<form action="/connexion" method="post" class='section'>
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Adresse e-mail</label>
        <div class="control">
            <input class="input is-rounded" id="test1" type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail"> 
        </div>
        @if($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Mot de Passe</label>
        <div class="control">
            <input class="input is-rounded" type="password" name="password" placeholder="Mot de Passe"> 
        </div>
        @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">Se Connecter</button>
        </div>
    </div>
</form>
@endsection
