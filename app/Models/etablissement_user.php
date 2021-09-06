<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etablissement_user extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'id_etablissement_user';
    protected $table = "etablissement_user";
    protected $guard = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_etablissement',
        'id_user',
        'is_default',
        'is_default_annee',
    ];
}
