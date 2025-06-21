<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'legal_name',
        'billing_address'
    ];

    public function employees() {
        return $this->hasMany(Employee::class);
    }

    public function getEmployeeByFirstName($name)
    {
        return $this->employees()->where('employees.first_name', '=', $name)->firstOrFail();
    }
}
