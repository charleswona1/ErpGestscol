<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanction extends Model
{
    use HasFactory;
    protected $table = 'sanction';
    public $timestamps = false;
    protected $fillable = ['libelle', 'abbreviation','seuil','degre', 'unite', 'id_etablissement'];
    
    public function etablissement()
    {
        return $this->belongsTo('App\Models\etablissement');
    }

}
