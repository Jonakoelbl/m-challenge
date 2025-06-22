<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Http\Services\CompaniesServices;
use App\Models\Company;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function __construct(CompaniesServices $companiesServices)
    {
        $this->companiesServices = $companiesServices;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response(Company::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $newCompany = Company::create($request->validated());
        return response()->json($newCompany, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return response()->json($company);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());
        return response()->json($company);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(['message' => 'Company has been removed']);
    }

    public function getBillingByCompany()
    {
        return response()->json($this->companiesServices->billingByCompany());
    }

    public function getConsumptionLastWeek(Company $company)
    {
        return response()->json(['result' => $this->companiesServices->consumptionLastWeek($company)]);
    }
}
