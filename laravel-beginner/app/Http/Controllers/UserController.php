<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users/register');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'name' => ['required',  'min:5'],
            'email' => ['required', 'email', Rule::unique('users',  'email')],
            'password' => 'required|confirmed|min:8'
        ]);
$formFields['password'] = bcrypt($formFields['password'] );
$user = User::create($formFields);
auth()->login($user);
return redirect('/')->with('message', 'Nuovo utente creato con successo');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Arrivederci alla prossima sessione');
    }

    public function login(){
        return view('/users/login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth() ->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'sei loggato' . " " .  auth()->user()->name);
        }
        return back()->withErrors(['email' => 'Credenziiali non valide']) ->onlyInput('email');

    }
}
