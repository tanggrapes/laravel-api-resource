<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    public function index()
    {
      return ProductResource::collection(Product::paginate());
    }

    public function store(Request $request)
    {
      $product = Product::create([
        'name' => $request->name,
        'description'=> $request->description,
        'expiry_date'=> $request->expiry_date,
        'cost'=> $request->cost,
        'price'=> $request->price,
        'category_id'=> $request->category_id
      ]);

      return new ProductResource($product);
    }

    public function show(Product $product)
    {
      return new ProductResource($product);
    }

    public function update(Request $request, Product $product)
    {
      // check if currently authenticated user is the owner of the book


      $product->update($request->only(['name']));

      return $product;
    }

    public function destroy(Product $product)
    {
      $product->delete();

      return response()->json(null, 204);
    }
}
