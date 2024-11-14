<?php

namespace App\Http\Controllers;

use App\Services\CatalogService;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(CatalogService $service)
    {
        return $service->getProducts();
    }

    public function info($id, CatalogService $service)
    {
        return $service->getProductById($id);
    }

    public function top(CatalogService $service)
    {
        return $service->getTopProducts(6);
    }

    public function create(Request $request, CatalogService $service)
    {
        $fields = $request->validate([
            'name' => 'required|string|min:5',
            'price' => 'required|numeric'
        ]);

        return $service->create($fields);
    }
}
