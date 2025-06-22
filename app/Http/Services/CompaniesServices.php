<?php

namespace App\Http\Services;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Carbon\Carbon;

class CompaniesServices
{
    public function billingByCompany()
    {
        return Company::query()
            ->leftJoin('employees', 'companies.id', '=', 'employees.company_id')
            ->selectRaw('
                        companies.id AS company_id,
                        companies.legal_name AS company_name,
                        COUNT(employees.id) AS employees_quantity,
                        COUNT(employees.id) * 5 AS billing_total
            ')
            ->groupBy('companies.id', 'companies.legal_name')
            ->paginate(10);
    }

    public function consumptionLastWeek(Company $company)
    {
        $oneWeekBefore = Carbon::now()->subWeeks();
        return Company::query()
            ->where('companies.id', $company->id)
            ->join('employees', 'employees.company_id', '=', 'companies.id')
            ->join('gift_card_redemptions', 'gift_card_redemptions.employee_id', '=', 'employees.id')
            ->where('gift_card_redemptions.created_at', '>=', $oneWeekBefore)
            ->sum('gift_card_redemptions.local_currency_cost');
    }
}
