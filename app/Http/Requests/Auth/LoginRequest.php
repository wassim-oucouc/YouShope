<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Autorise l'utilisateur à soumettre la demande.
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'], // Valide que l'email est bien formé.
            'password' => ['required', 'string'], // Valide que le mot de passe est fourni.
        ];
    }
    public function authenticate(): void
    {
        $credentials = $this->only('email', 'password'); // 'email' est en minuscule ici
    
        // Si votre colonne est en minuscule, utilisez simplement 'email' sans modification
        if (! Auth::attempt($credentials, $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());
    
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
    
        RateLimiter::clear($this->throttleKey());
    }
    
    

    public function ensureIsNotRateLimited(): void
    {
        // Si trop de tentatives ont échoué, bloque l'utilisateur pendant un certain temps.
        if (RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            event(new Lockout($this));

            $seconds = RateLimiter::availableIn($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.throttle', [
                    'seconds' => $seconds,
                    'minutes' => ceil($seconds / 60),
                ]),
            ]);
        }
    }

    public function throttleKey(): string
    {
        // Crée une clé unique pour limiter les tentatives basées sur l'email et l'adresse IP
        return Str::lower($this->input('email')) . '|' . $this->ip();
    }
}
