<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\UserResetPassword;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Representante extends Model
{
    use HasFactory;

    protected $table = 'nsc_representante';
    protected $guarded = [];

    public function persona(){

        return $this->belongsTo(Persona::class, 'persona_id');

    }

    public function estudiantes(){

        return $this->belongsToMany(Estudiante::class, 'nsc_estudiante_representante')->withPivot('parentesco', 'representacion_legal', 'estado');
    
    }

    public function user(){

        return $this->belongsTo(User::class, 'user_id');

    }

    public function voucher(){

        return $this->HasMany(cob_voucher::class);

    }


}