<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    protected $table = "booking";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, "unit_id", "id");
    }

    public function marketing(): BelongsTo
    {
        return $this->belongsTo(Marketing::class, "marketing_id", "id");
    }

    public function booking(): HasMany
    {
        return $this->hasMany(AdditionLandPayment::class, "booking_id", "id");
    }
}
