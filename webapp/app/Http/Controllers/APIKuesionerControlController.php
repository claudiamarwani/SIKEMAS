<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class APIKuesionerController extends Controller
{
    public function categories(Category $category) 
    {
        $categories= $category->all();
        return response()->json($categories);
    }
}
