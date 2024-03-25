<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Housing extends Model
{
    protected $table = "housing";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    public function unit(): HasMany
    {
        return $this->hasMany(Unit::class, "housing_id", "id");
    }
}
