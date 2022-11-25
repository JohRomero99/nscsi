<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libreta extends Model
{
    //use HasFactory;
    //protected $connection = "dbinicialnsc";
    protected $table = 'libretas';
    protected $guarded = [];

    public function parciales() {
        return $this->hasMany(LibretaParcial::class);
    }
    public function quimestrales() {
        return $this->hasMany(LibretaQuimestral::class);
    }

    public function anio_lectivo()
    {
        return $this->belongsTo(AnioLectivo::class, 'anio_lectivo_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_nsc_id');
    }

    

    /*$libreta_parcials = DB::table('nsc_libreta as libreta')->join('nsc_libreta_parcial as parcials', 'libreta.id', '=', 'parcials.libreta_id')->select('libreta.*', 'parcials.*')->get();*/
}

