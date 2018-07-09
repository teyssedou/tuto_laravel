@extends('layout')

@section('contenu')
<form action="/inscription" method="post" class='section'>
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Adresse e-mail</label>
        <div class="control">
            <input class="input is-rounded" type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail"> 
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
        <label class="label">Confirmation du Mot de Passe</label>
        <div class="control">
            <input class="input is-rounded" type="password" name="password_confirmation" placeholder="Confirmation du Mot de Passe"> 
        </div>
        @if($errors->has('password_confirmation'))
            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
        @endif
    </div>
    

    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">M'inscrire</button>
        </div>
    </div>

</form>
@endsection
