<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ship extends Model
{
    use HasFactory;

    public function hauls(): HasMany{
        return $this->hasMany(Haul::class);
    }

    public function company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }
}
