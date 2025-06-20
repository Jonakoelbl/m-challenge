<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'credit_balance'
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function gitfCardsRedemptions() {
        return $this->hasMany(GiftCardRedemption::class);
    }
}
