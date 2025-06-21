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
        $orders = GiftCardRedemption::query()->paginate(10);
        return response()->json(['orders' => $orders], Response::HTTP_CREATED);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GiftCardRedemptionRequest $request)
    {
        $newOrder = GiftCardRedemption::query()->created($request->all());
        return response()->json($newOrder, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = GiftCardRedemption::query()->findOrFail($id);
        return response()->json(['order' => $order], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GiftCardRedemptionRequest $request, $id)
    {
        $updatedOrder = GiftCardRedemption::query()->findOrFail($id)->update($request->all());
        return response()->json($updatedOrder, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        GiftcardRedemption::query()->findOrFail($id)->delete();
        return response()->json(['message' => 'Gift card redemption has been removed'], Response::HTTP_OK);
    }
}
