<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    public function index(){
        //dd(request('tag'));
        //dd(request('search'));
        return view('notes/index', [
           // 'contents' => Notes::all()

            'contents' => Notes::latest()->filter(request(['tag' , 'search']))->paginate(3)
        ]);
    }

    public function show(Notes $nota){
        return view('notes/show',  [
            'note' =>  $nota
        ]);
}


public function create(){
        return view('notes/create');
}

public function store(Request $request){
        //dd($request ->all());
    //dd($request->file('immagine'));

    $formFields = $request->validate([
        'titolo' => 'required',
       // 'autore' => ['required', Rule::unique('notes', 'autore')],

        'autore' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
       // 'immagine' => 'required | image | mimes:jpg, jpeg, png, svg | max: 2048',

        'immagine' => ' image | mimes:jpg, jpeg, png, svg | max: 2048',
        'contenuto' => 'required'
    ]);

    if($request->hasFile('immagine')){
        $formFields['immagine'] = $request->file('immagine') ->store('images', 'public');
    }

    $formFields['id_user'] = auth()->id();


    Notes::create($formFields);

    return redirect('/')->with('message', 'Nuova nota creata con successo');

}

    public function edit(Notes $nota){
       // dd($nota->titolo);
        return view('notes/edit',  [
            'note' =>  $nota
        ]);
    }

    public function update(Request $request, Notes $nota ){

        if($nota->id_user != auth()->id()){
            abort('403', 'Non sei autorizzato');
        }

        $formFields = $request->validate([
            'titolo' => 'required',
            // 'autore' => ['required', Rule::unique('notes', 'autore')],
            'autore' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            // 'immagine' => 'required | image | mimes:jpg, jpeg, png, svg | max: 2048',
            'immagine' => ' image | mimes:jpg, jpeg, png, svg | max: 2048',
            'contenuto' => 'required'
        ]);

        if($request->hasFile('immagine')){
            $formFields['immagine'] = $request->file('immagine') ->store('images', 'public');
        }

      $nota->update($formFields);
        return back()->with('message', 'Nota aggiornata con successo');

    }

    public function delete( Notes $nota){
        if($nota->id_user != auth()->id()){
            abort('403', 'Non sei autorizzato');
        }
        $nota->delete();
        return redirect('/')->with('message', 'Nota cancellata con successo');
    }

    public function manage(){
        return view('notes.manage' ,  ['notes'=>auth()->user()->notes()->get()]);
    }

}
