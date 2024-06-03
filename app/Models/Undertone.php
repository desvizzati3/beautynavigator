<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Undertone extends Model
{
    use HasFactory;

    public function undertone(): HasMany
    {
        return $this->hasMany(Product::class, 'undertone_id');
    }
}
