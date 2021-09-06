<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ressource_profil extends Model
{
    use HasFactory;

    protected $table = "ressource_profil";
    protected $guard = 'users';
    public $timestamps = false;


    protected $fillable = [
        'id_ressource',
        'id_profil',
        'lecture',
        'ecriture',
        'modification',
        'suppression',
    ];


}
