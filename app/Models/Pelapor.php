<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pelapor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pelapor';
    protected $primaryKey = 'id_pela';
    protected $fillable = [
        'id_pela',
        'nama_pela',
        'email_pela',
        'no_hp',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
