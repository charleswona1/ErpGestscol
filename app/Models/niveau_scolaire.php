<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau_scolaire extends Model
{
    use HasFactory;

    public function classe()
    {
        return $this->hasMany('App\Models\classe');
    }
}
