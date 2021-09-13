<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_module';
    protected $table = 'module';

    public function etablissement()
    {
        return $this->belongsToMany(etablissement::class, 'module_etablissement', 'id_module', 'id_etablissement');
    }

    public function ressources() {
        return $this->hasMany(ressource::class, 'id_module');
    }
}
