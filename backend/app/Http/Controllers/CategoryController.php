<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function index(CategoryService $service)
    {
        return $service->getCategories();
    }

    public function info($id, CategoryService $service)
    {
        return $service->getCategoryById($id);
    }
}
