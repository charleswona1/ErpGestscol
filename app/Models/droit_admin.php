<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class droit_admin extends Model
{
    use HasFactory;

    protected $table = "droit_admin";
    protected $primaryKey = "id_droit";

    public function admin()
    {
        return $this->belongsToMany(admin::class, 'admin_acces', 'id_droit', 'id_admin');
    }
}
