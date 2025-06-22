<?php

namespace App\Http\Controllers;

use App\Http\Requests\GiftCardRedemptionRequest;
use App\Models\GiftCardRedemption;
use Symfony\Component\HttpFoundation\Response;

class GiftCardRedemptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = GiftCardRedemption::paginate(10);
        return response()->json($orders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GiftCardRedemptionRequest $request)
    {
        $newOrder = GiftCardRedemption::create($request->validated());
        return response()->json($newOrder, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(GiftCardRedemption $order)
    {
        return response()->json($order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GiftCardRedemptionRequest $request, GiftCardRedemption $order)
    {
        $order->update($request->all());
        return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GiftCardRedemption $order)
    {
        $order->delete();
        return response()->json(['message' => 'Gift card redemption has been removed']);
    }
}
