<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use Notifiable;

    protected $guard = 'Petugas';
    protected $table = 'petugas';
    protected $fillable = ['nama', 'username', 'password', 'email', 'telp', 'level'];

    public function tanggapan()
    {
        return $this->hasMany('App\Tanggapan', 'id');
    }
}
