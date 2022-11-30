<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;






class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
         return response()->json([
              'status' => 200,
              'message' => 'Categorias listadas com sucesso',
              'data' => CategoryResource::collection($categories)
         ], 200);
    }

   
}
