<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    use HasFactory;

    public $timestamps = false;

    /*const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';*/

    protected $primaryKey = 'id_apprenant';
    protected $table = "apprenant";
    protected $guard = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_etablissement',
        'nom',
        'matricule',
        'sexe',
        'date_naissance',
        'lieu_naissance',
        'email',
        'telephone',
        'groupe_sanguin',
        'rhesus',
        'religion',
        'domicile',
        'type_contact',
        'index_contact',
        'autres',
        'nom_pere',
        'nom_mere',
        'nom_tuteur',
        'profession_pere',
        'profession_mere',
        'profession_tuteur',
        'tel_pere',
        'tel_mere',
        'tel_tuteur',
        'email_pere',
        'email_mere',
        'email_tuteur',
    ];

    public function etablissement()
    {
        return $this->belongsTo(etablissement::class, 'id_etablissement');
    }
}
