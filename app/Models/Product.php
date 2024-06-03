<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'brand'];

    public function review(): HasMany
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function skintone(): BelongsTo
    {
        return $this->belongsTo(Skintone::class);
    }

    public function undertone(): BelongsTo
    {
        return $this->belongsTo(Undertone::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
