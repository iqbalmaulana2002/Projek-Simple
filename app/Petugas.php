<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Petugas extends Authenticatable
{
    use Notifiable;

    protected $table = 'petugas';

    protected $guard = 'petugas';

    protected $primaryKey = 'id_petugas';

    protected $fillable = ['nama', 'username', 'password', 'telp', 'level'];

    protected $hidden = 'password';

    public function tanggapan()
    {
        return $this->hasMany('\App\Petugas', 'id_petugas');
    }
}
