<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_etablissement extends Model
{
    use HasFactory;

    protected $table = "admin_etablissement";

    protected $fillable = [
        'id_etablissement',
        'id_admin',
    ];

    public $timestamps = false;
}
