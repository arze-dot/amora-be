<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdditionLandInstallment extends Model
{
    protected $table = "additional_land_installment";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function additionLandPayment(): BelongsTo
    {
        return $this->belongsTo(AdditionLandPayment::class, "payment_id", "id");
    }
}
