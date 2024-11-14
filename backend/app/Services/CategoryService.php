<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryService
{
    /**
     * Получает список категорий.
     * @return Collection
     */
    public function getCategories()
    {
        return Category::query()->get();
    }

    /**
     * Получает категорию по ID.
     * @param $id
     * @return Model
     */
    public function getCategoryById($id)
    {
        $model = Category::query()
            ->where('id', $id)
            ->first();

        if ($model === null) {
            throw new NotFoundHttpException('Категория не найдена.');
        }

        return $model;
    }
}
