<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibretaQuimestral extends Model
{
    protected $table = 'libreta_quimestral';
    protected $guarded = [];

    public function libreta(){
        return $this->belongsTo(Libreta::class ,'libreta_id');
    }
}
