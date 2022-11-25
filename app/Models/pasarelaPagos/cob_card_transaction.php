<?php

namespace App\Models\pasarelaPagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_card_transaction extends Model
{
    use HasFactory;

    protected $table = "cob_card_transaction";

    // Relacion de uno a uno.
    public function voucher(){
        return $this->belongsTo('App\Models\pasarelaPagos\cob_voucher','cob_voucher_id');
    }

}
