<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skintone extends Model
{
    use HasFactory;

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'skintone_id');
    }
}
