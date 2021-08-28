<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function etablissement()
    {
        return $this->belongsTo(etablissement::class);
    }
    
=======
    public $guarded = [];
    public $timestamps = false;
    protected $table = 'document';
>>>>>>> 679d1e2865839cd4573d6cd8d580bfb71d1922ca
}
