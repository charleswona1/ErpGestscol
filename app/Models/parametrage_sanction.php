<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanction;
use App\Models\cycle;

class parametrage_sanction extends Model
{
    use HasFactory;
    protected $table = 'parametrage_sanction';
    public $timestamps = false;
    protected $fillable = ['id_cycle', 'id_sanction','valeur','id_sanction2', 'valeur2', 'libelle'];

    public function sanction1()
    {
        return $this->belongsTo('App\Models\sanction', 'id_sanction', 'id_sanction');
        
    }
    public function cycle()
    {
        return $this->belongsTo('App\Models\cycle', 'id_cycle', 'id_cycle');
        
    }
    public function sanction2()
    {
        $sanction= sanction::where('id_sanction',$this->id_sanction2);
        
        return $sanction;
        
    }
}
