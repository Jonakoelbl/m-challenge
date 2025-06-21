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
        $variations = Variation::query()->paginate(10);
        return response()->json(['variations' => $variations]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VariationRequest $request)
    {
        $variation = Variation::query()->create($request->all());
        return response()->json(['variation' => $variation], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $variation = Variation::query()->findOrFail($id);
        return response()->json(['variation' => $variation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VariationRequest $request, $id)
    {
        $variation = Variation::query()->findOrFail($id)->update($request->all());
        return response()->json(['variation' => $variation]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Variation::query()->findOrFail($id)->delete();
        return response()->json(['message' => 'Variation has been removed']);
    }
}
