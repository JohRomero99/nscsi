<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class valorPension extends Model
{
    use HasFactory;
    protected $table = 'cob_valor_pension';
    
    public function estudiantePension(){

        return $this->hasMany(estudiantePension::class);

    }
}
