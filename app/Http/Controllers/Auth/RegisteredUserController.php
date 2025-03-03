<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Utilisateur;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'Prenom' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'password_confirmation' => 'required_with:password|same:password',
        ]);

        $user = Utilisateur::create([
            'Nom' => $request->name,
            'Prenom' => $request->Prenom,
            'email' => $request->email,
            'Password' => Hash::make($request->password),
            'id_role' => 1,
            'Status' => 'Active',
            'Image' => $request->Image,
        ]);
        event(new Registered($user));
       Auth::login($user);
        // Auth::login($user);
        

        return redirect(RouteServiceProvider::HOME);
    }
}
