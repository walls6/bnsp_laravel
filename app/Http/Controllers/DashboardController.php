<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        $totalItems = Item::count();
        $totalCategories = Category::count();
        $totalStock = Item::sum('stock');
        $recentItems = Item::with('category')->latest()->take(6)->get();

        return view('dashboard.index', compact('totalItems', 'totalCategories', 'totalStock', 'recentItems'));
    }
}
