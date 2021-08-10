<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_niveau',
        'nom'
    ];

    public function niveau()
    {
        return $this->belongsTo('App\Models\niveau_scolaire', 'id_niveau', 'id_niveau');
    }

}
