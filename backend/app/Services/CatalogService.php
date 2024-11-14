<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CatalogService
{
    /**
     * Получает список товаров.
     * @return Collection
     */
    public function getProducts()
    {
        return Product::query()
            ->get();
    }

    /**
     * Получает товар по ID.
     * @param $id
     * @return Model
     */
    public function getProductById($id)
    {
        $model = Product::query()
            ->where('id', $id)
            ->first();

        if ($model === null) {
            throw new NotFoundHttpException('Товар не найден.');
        }

        return $model;
    }

    /**
     * Получает топ товаров.
     * @param $limit
     * @return Collection
     */
    public function getTopProducts($limit = 4)
    {
        return Product::query()
            ->where('active', true)
            ->limit($limit)
            ->orderByDesc('created_at')
            ->get();
    }

    /**
     * Создаёт товар.
     * @param array $data
     * @return Model
     */
    public function create(array $data)
    {
        return Product::create($data);
    }
}
