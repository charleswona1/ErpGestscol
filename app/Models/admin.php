<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $primaryKey = 'id_admin';
    protected $table = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
        'telephone',
        'login',
        'enabled',
        'creation_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function droit_admin()
    {
        return $this->belongsToMany(droit_admin::class, 'admin_acces', 'id_admin', 'id_droit');
    }

    public function etablissement()
    {
        return $this->belongsToMany(etablissement::class, 'admin_etablissement', 'id_admin', 'id_etablissement');
    }
}
