<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\valorMatriculacion;

class valorMatriculacion extends Model
{
    use HasFactory;
    protected $table = 'cob_valor_matriculacion';

    public function estudiantePension(){

        return $this->hasMany(estudiantePension::class);

    }
}
