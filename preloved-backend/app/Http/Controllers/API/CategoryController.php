<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount(['products' => function ($query) {
                $query->withFilters();
            }])
            ->get();

        return CategoryResource::collection($categories);
    }
}
