<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module_etablissement extends Model
{
    use HasFactory;

    protected $table = 'module_etablissement';
    //protected $primaryKey = 'id_module';

    protected $fillable = [
        'id_module',
        'id_etablissement',
        'id_licence',
        'date_expiration',
        'numero_licence',
    ];

    public $timestamps = false;
}
