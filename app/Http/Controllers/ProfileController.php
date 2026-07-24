<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;

class ProfileController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalItems = Item::count();
        $totalStock = Item::sum('stock');
        $averageStock = $totalItems > 0 ? intval($totalStock / $totalItems) : 0;

        return view('profile', compact('totalCategories', 'totalItems', 'totalStock', 'averageStock'));
    }
}
