<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdditionLandPayment extends Model
{
    protected $table = "additional_land_payment";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, "unit_id", "id");
    }

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, "booking_id", "id");
    }

    public function additionLandInstallment(): HasMany
    {
        return $this->hasMany(AdditionLandInstallment::class, "payment_id", "id");
    }
}
