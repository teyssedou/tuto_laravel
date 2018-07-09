<?php

namespace App\Http\Controllers;

class CompteController extends Controller
{
    public function accueil()
    {
        return view('mon-compte');
    }

    public function deconnexion()
    {
        auth()->logout();

        flash('Vous êtes maintenant déconnecté')->success();

        return redirect('/');
    }

    public function modificationMotDePasse()
    {
        request()->validate([
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => ['required'],
        ]);

        auth()->user()->update([
            'mot_de_passe' => bcrypt(request('password')),
        ]);
        //Autre méthode:
        // $utilisateur = auth()->user();
        // $utilisateur->mot_de_passe = bcrypt(request('password'));
        // $utilisateur->save();

        flash('Votre mot de passe a bien été mis à jour!')->success();

        return redirect('/mon-compte');
    }
}
