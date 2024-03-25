<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    protected $table = "unit";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function housing(): BelongsTo
    {
        return $this->belongsTo(Housing::class, "housing_id", "id");
    }

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class, "unit_id", "id");
    }

    public function additionLandPayment(): HasMany
    {
        return $this->hasMany(AdditionLandPayment::class, "unit_id", "id");
    }
}
