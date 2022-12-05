<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pay_tarjetas_agregadas extends Model
{
    use HasFactory;

    protected $table = "pay_tarjetas_agregadas";
    protected $guarded = [];
    protected $hidden = [
        'id',
        'token',
        'bin',
        'status',
        'holder_name',
        'expiry_year',
        'expiry_month',
        'transaction_reference',
        'type',
    ];

}
