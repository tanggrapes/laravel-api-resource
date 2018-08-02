<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Http\Resources\TransactionResource;


class TransactionController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    public function index()
    {
      return TransactionResource::collection(Transaction::paginate());
    }

    public function store(Request $request)
    {
      $transaction = Transaction::create([
        'transaction_date'=> $request->transaction_date,
        'total'=> $request->total,
        'subtotal'=> $request->subtotal,
        'discount_amount'=> $request->discount_amount,
        'discount_percentage'=> $request->discount_percentage,
        'amount_tendered'=> $request->amount_tendered,
        'change'=> $request->change,
      ]);

      return new TransactionResource($transaction);
    }

    public function show(Transaction $transaction)
    {
      return new TransactionResource($transaction);
    }

    public function update(Request $request, Transaction $transaction)
    {
      // check if currently authenticated user is the owner of the book


      $transaction->update($request->only(['name']));

      return $transaction;
    }

    public function destroy(Transaction $transaction)
    {
      $transaction->delete();

      return response()->json(null, 204);
    }
}
