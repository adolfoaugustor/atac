<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class HoneypotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Adiciona a regra de validação 'honeypot'
        Validator::extend('honeypot', function ($attribute, $value, $parameters, $validator) {
            // A validação passa se o campo honeypot estiver vazio
            return empty($value);
        }, 'Erro de validação de segurança.');
    }
}
