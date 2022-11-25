<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignaturaLibreta extends Model
{
   // use HasFactory;
   protected $table = 'asignaturas_libretas';
   protected $guarded = [];

   public function libretas(){
      return $this->hasMany(Libreta::class);
   }
   public function areaAsignatura(){
      return $this->belongsTo(AreaAsignatura::class ,'area_asigantura_id');
  }
}
