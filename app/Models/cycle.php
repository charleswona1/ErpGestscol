<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cycle extends Model
{
    use HasFactory;

    public $timestamps = false;

    /*const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';*/

    protected $primaryKey = 'id_cycle';
    protected $table = "cycle";

    protected $fillable = [
        'id_etablissement',
        'nom',
    ];

    public function etablissement()
    {
        return $this->belongsTo(etablissement::class, 'id_etablissement');
    }

    public function niveauScolaire()
    {
        return $this->hasMany(niveau_scolaire::class, 'id_cycle');
    }

    public function parametrage_sanction()
    {
        return $this->hasMany(parametrage_sanction::class, 'id_cycle');
    }
}
