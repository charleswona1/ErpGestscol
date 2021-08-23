<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_profil';
    protected $table = "profil";

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
