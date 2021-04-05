<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
	use Notifiable;

    protected $table = 'masyarakat';

    protected $guard = 'masyarakat';

    protected $primaryKey = 'nik';

    public $incrementing = false;

    protected  $keyType = 'string';

    protected $fillable = ['nik', 'nama', 'username', 'password', 'telp'];

    protected $hidden = 'password';

    public function pengaduan()
    {
        return $this->hasMany('\App\Pengaduan', 'nik');
    }
}
