<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SohHistory;
use App\Http\Resources\SohHistoryResource;

class SohHistoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    public function index()
    {
      return SohHistoryResource::collection(SohHistory::paginate());
    }

    public function store(Request $request)
    {
      $soh_history = SohHistory::create([
        'product_id' => $request->product_id,
        'notes'=> $request->notes,
        'quantity'=> $request->quantity,
        'total'=> $request->total
      ]);

      return new SohHistoryResource($soh_history);
    }

    public function show(SohHistory $soh_history)
    {
      return new SohHistoryResource($soh_history);
    }

    public function update(Request $request, SohHistory $soh_history)
    {
      // check if currently authenticated user is the owner of the book


      $soh_history->update($request->only(['name']));

      return $soh_history;
    }

    public function destroy(SohHistory $soh_history)
    {
      $soh_history->delete();

      return response()->json(null, 204);
    }


}
