<?php

namespace App\Http\Controllers;

use App\Http\Requests\BenefitRequest;
use App\Http\Services\BenefitsService;
use App\Models\Benefit;
use Symfony\Component\HttpFoundation\Response;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BenefitRequest $request, BenefitsService $benefitsService)
    {
        return response()->json($benefitsService->filter($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BenefitRequest $request)
    {
        return response()->json(
            Benefit::create($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Benefit $benefit)
    {
        return response()->json($benefit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BenefitRequest $request, Benefit $benefit)
    {
        return  response()->json(
            $benefit->update($request->validated())
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        return response()->json(['message' => 'Benefit has been removed']);
    }
}
