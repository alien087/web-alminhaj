<?php

namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class user_biasa extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'blogger';

        protected $fillable = [
            'name', 'email', 'password','last_login', 'non_aktif'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }