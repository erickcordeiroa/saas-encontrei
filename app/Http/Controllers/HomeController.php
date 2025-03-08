<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $topServiceProviders = User::where('role', '=', 'provider')
            ->with('category')
            ->withSum('reviews', 'rating')
            ->orderBy('reviews_sum_rating', 'desc')
            ->take(6)
            ->get();

        return Inertia::render('Home', [
            'topProviders' => $topServiceProviders,
            'categories' => Category::all()
        ]);
    }
}
