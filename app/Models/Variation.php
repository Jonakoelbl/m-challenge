<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'local_currency_cost',
        'local_currency_price',
        'credits_price',
        'benefit_id'
    ];

    public function benefit()
    {
        return $this->belongsTo(Benefit::class);
    }

    public function giftCardsRedemptions()
    {
        return $this->hasMany(GiftCardRedemption::class);
    }
}
