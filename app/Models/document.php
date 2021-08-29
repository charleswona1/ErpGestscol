<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;

    public function etablissement()
    {
        return $this->belongsTo(etablissement::class);
    }

    public $guarded = [];
    public $timestamps = false;
    protected $table = 'document';
}
