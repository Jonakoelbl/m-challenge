<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCardRedemption extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'variation_id',
        'gift_card_id',
        'local_currency_cost',
        'local_currency_price',
        'credits_price'
    ];


    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function giftCard()
    {
        return $this->belongsTo(GiftCard::class);
    }
}
