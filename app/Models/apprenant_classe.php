<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant_classe extends Model
{
    use HasFactory;
    public $timestamps = false;

    /*const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';*/

    protected $primaryKey = 'id_apprenant_classe';
    protected $table = "apprenant_classe";

}
