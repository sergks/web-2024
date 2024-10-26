<?php

namespace App\Http\Controllers;

class CatalogController extends Controller
{
    public function index()
    {
        return [
            ['id' => 1, 'name' => 'Samsung Galaxy Tab 10'],
            ['id' => 2, 'name' => 'Samsung Galaxy Tab 11']
        ];
    }

    public function info($id)
    {
        return [
            'id' => $id,
            'name' => 'Samsung Galaxy Tab 11'
        ];
    }

    public function top()
    {
        return [
            ['id' => 1, 'name' => 'Samsung Galaxy Tab 10'],
            ['id' => 2, 'name' => 'Samsung Galaxy Tab 11'],
            ['id' => 2, 'name' => 'Samsung Galaxy Tab 11'],
            ['id' => 2, 'name' => 'Samsung Galaxy Tab 11']
        ];
    }
}
