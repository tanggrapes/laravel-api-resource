<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BasketItem;
use App\Http\Resources\BasketItemResource;

class BasketItemController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    public function index()
    {
      return BasketItemResource::collection(BasketItem::paginate());
    }

    public function store(Request $request)
    {
      $basket_item = BasketItem::create([
        'product_id' => $request->product_id,
        'transaction_id'=> $request->transaction_id,
        'quantity'=> $request->quantity,
        'product_price'=> $request->product_price
      ]);

      return new BasketItemResource($basket_item);
    }

    public function show(BasketItem $basket_item)
    {
      return new BasketItemResource($basket_item);
    }

    public function update(Request $request, BasketItem $basket_item)
    {
      // check if currently authenticated user is the owner of the book


      $basket_item->update($request->only(['name']));

      return $basket_item;
    }

    public function destroy(BasketItem $basket_item)
    {
      $basket_item->delete();

      return response()->json(null, 204);
    }
}
