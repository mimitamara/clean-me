<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

//        dd($categories);

        return view('pages.categories', [
            'categories' => $categories
        ]);
    }
}
