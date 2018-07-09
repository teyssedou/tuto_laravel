<?php

namespace App\Http\Controllers;

class MessagesController extends Controller
{
    public function nouveau()
    {
        request()->validate([
            'message' => ['required'],
        ]);
        auth()->user()->messages()->create([
            'contenu' => request('message'),
        ]);

        //Autre Méthode:
        // Message::create([
        //     'utilisateur_id' => auth()->user()->id,
        //     'contenu' => request('message'),
        // ]);

        flash('Votre message a bien été publié.')->success();

        return back();
    }
}
