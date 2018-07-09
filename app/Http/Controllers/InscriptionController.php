<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.',
        ]);

        $utilisateur = Utilisateur::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        //Autre méthode:
        // $utilisateur = new App\Utilisateur();
        // $utilisateur->email = request('email');
        // $utilisateur->mot_de_passe = bcrypt(request('password'));
        // $utilisateur->save();

        return 'Nous avons reçu votre email qui est "'.request('email').'" et votre mot de passe est "'.request('password').'"';
    }
}
