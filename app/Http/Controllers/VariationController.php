<?php

namespace App\Http\Controllers;

use App\Http\Requests\VariationRequest;
use App\Models\Variation;
use Symfony\Component\HttpFoundation\Response;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variations = Variation::paginate(10);
        return response()->json($variations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VariationRequest $request)
    {
        $variation = Variation::create($request->validated());
        return response()->json($variation, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Variation $variation)
    {
        return response()->json($variation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VariationRequest $request, Variation $variation)
    {
        $variation->update($request->validated());
        return response()->json($variation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variation $variation)
    {
        $variation->delete();
        return response()->json(['message' => 'Variation has been removed']);
    }
}
