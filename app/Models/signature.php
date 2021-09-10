<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signature extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_etablissement',
        'sign_g',
        'sign_d',
        'sign_m',
        'sign_app',
        'nom_principal',
    ];

    public $guarded = [];
    public $timestamps = false;
    protected $table = 'signature';
    protected $primaryKey = 'id_signature';

}
