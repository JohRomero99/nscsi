<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cob_voucher;

class cob_card_transaction extends Model
{
    use HasFactory;

    protected $table = "cob_card_transaction";

    // Relacion de uno a uno.
    public function voucher(){

        return $this->belongsTo(cob_voucher::class,'cob_voucher_id');
        
    }

}
