<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau_scolaire extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'id_niveau';
    protected $table = "niveau_scolaire";

    public function classe()
    {
        return $this->hasMany(classe::class, 'id_niveau');
    }
}
