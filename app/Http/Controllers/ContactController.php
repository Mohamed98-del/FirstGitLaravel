<?php

namespace App\Http\Controllers;

use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Arr;

class ContactController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:2|max:13|unique:contacts,num|alpha',
            'prenom' => 'required|min:2|max:13|alpha',
            'email' => 'required|max:29|min:10|unique:contacts,email',
            'num' => 'required|max:9|min:9|unique:contacts,num|numeric'
        ]);


        $contact = new Contact;
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->email = $request->input('email');
        $contact->num = $request->input('num');

        $contact->save();
        // dd($contact->save() == true);
        $ok = "ok";

        return redirect('/ajout', compact('ok'));
    }
    public function index()
    {
        $replace = "";
        return view('/ajout', compact('replace'));
    }

}
