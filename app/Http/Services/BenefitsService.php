<?php

namespace App\Http\Services;

use App\Http\Requests\BenefitRequest;
use App\Models\Benefit;

class BenefitsService
{
    public function filter(BenefitRequest $request)
    {
        $query = Benefit::query()->with('brand');
        if($request->filled('name')) {
            $query->where('name', $request->name);
        }
        if($request->filled('country_of_benefit')) {
            $query->where('country_of_benefit', $request->country_of_benefit);
        }
        if($request->filled('brand_id')) {
            $query->where('brand_id', $request->brand_id);
        }

        return $query->paginate(10);
    }
}
