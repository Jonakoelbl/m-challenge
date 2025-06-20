<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'country_of_benefit',
        'country_of_benefit',
        'brand_id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }

    public function countryOfBenefit()
    {
        return $this->hasOne(Country::class, 'country_of_benefit');
    }
}
