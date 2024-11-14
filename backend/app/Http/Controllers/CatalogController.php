<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CatalogController extends Controller
{
    public function index()
    {
        return Product::query()
            ->get();
    }

    public function info($id)
    {
        return Product::query()
            ->where('id', $id)
            ->first();
    }

    public function top()
    {
        return Product::query()
            ->where('active', true)
            ->limit(4)
            ->orderByDesc('created_at')
            ->get();
    }
}
