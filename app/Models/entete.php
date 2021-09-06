<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entete extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_entete';
    protected $table = "entete";
    protected $guard = 'users';

    public $timestamps = false;

    protected $fillable = [
        'id_etablissement',
        'eng_gauche',
        'eng_droit',
    ];
}
