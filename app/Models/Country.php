<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'iso_3',
        'name'
    ];

    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }
}
