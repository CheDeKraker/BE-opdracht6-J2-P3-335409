<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductPerAllergeen extends Model
{
    protected $table = 'product_per_allergeen';

    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function allergeen()
    {
        return $this->belongsTo('App\Models\Allergeen');
    }
}
