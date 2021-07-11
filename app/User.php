<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','university','photo','city'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function recived_massages()
    {
        return $this->hasMany(recived_massage::class);
    }
    public function sent_massages()
    {
        return $this->hasMany(sent_massage::class);
    }
    public function recived_transactions()
    {
        return $this->hasMany(recived_transaction::class);
    }
    public function sent_transactions()
    {
        return $this->hasMany(Sent_transaction::class);
    }

}