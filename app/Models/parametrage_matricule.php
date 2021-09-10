<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parametrage_matricule extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'id_etablissement',
        'prefix_mat',
        'prefix2_mat',
        'suffix_mat',
        'pos_mat',
    ];

    public $guarded = [];
    public $timestamps = false;
    protected $table = 'parametrage_matricule';
    protected $primaryKey = 'id_parametrage';
}
