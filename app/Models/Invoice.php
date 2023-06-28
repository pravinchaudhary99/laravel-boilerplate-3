<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'invoice_id', 'id');
    }

    public function payment() : HasMany
    {
        return $this->hasMany(Payment::class, 'invoice_id', 'id');
    }
}
