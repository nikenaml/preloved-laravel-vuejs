<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GenderResource;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::withCount(['products' => function ($query) {
                $query->withFilters();
            }])
            ->get();

        return GenderResource::collection($genders);
    }
}
