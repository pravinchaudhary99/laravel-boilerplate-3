<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function invoice() : BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

}
