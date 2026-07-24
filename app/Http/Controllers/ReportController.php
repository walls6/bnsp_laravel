<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::orderBy('name')->get();
        $query = Item::with('category')->latest();

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $items = $query->get();

        return view('reports.index', compact('items', 'categories'));
    }

    public function pdf(Request $request)
    {
        $query = Item::with('category')->latest();

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $items = $query->get();
        $pdf = Pdf::loadView('reports.pdf', compact('items'));

        return $pdf->download('laporan-inventaris-' . now()->format('Ymd-His') . '.pdf');
    }
}
