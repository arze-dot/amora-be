<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marketing extends Model
{
    protected $table = "marketing";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class, "marketing_id", "id");
    }
}
