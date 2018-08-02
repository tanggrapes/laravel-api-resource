<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\CategoryResource;
use App\Product;
use App\Http\Resources\ProductResource;

class CategoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    public function index()
    {
      return CategoryResource::collection(Category::paginate());
    }

    public function store(Request $request)
    {
      $category = Category::create([

        'name' => $request->name,

      ]);

      return new CategoryResource($category);
    }

    public function show(Category $category)
    {
      return new CategoryResource($category);
    }

    public function update(Request $request, Category $category)
    {
      // check if currently authenticated user is the owner of the book


      $category->update($request->only(['name']));

      return $category;
    }

    public function destroy(Category $category)
    {
      $category->delete();

      return response()->json(null, 204);
    }

    // public function getProductsByCtegoryId($id){
    //     return ProductResource::collection(Product::paginate())::where('category_id',$id);
    // }
}
