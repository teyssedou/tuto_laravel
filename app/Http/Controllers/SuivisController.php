<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class SuivisController extends Controller
{
    public function nouveau()
    {
        $utilisateurQuiVaSuivre = auth()->user();
        $utilisateurQuiVaEtreSuivi = Utilisateur::where('email', request('email'))->firstOrFail();
    }
}
