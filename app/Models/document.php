<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_etablissement',
        'intitule',
        'ligne1',
        'ligne2',
        'ligne3',
        'ligne4',
        'ligne5',
        'ligne6',
        'possede_entete',

    ];

    public function etablissement()
    {
        return $this->belongsTo(etablissement::class);
    }

    public $guarded = [];
    public $timestamps = false;
    protected $table = 'document';
    protected $primaryKey = 'id_document';
}
