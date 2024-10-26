<script setup>
import Product from "@/components/Catalog/Product.vue";

const products = [
  {
    id: 1,
    name: 'Камера видеонаблюдения Xiaomi 1',
    price: 2841
  },
  {
    id: 2,
    name: 'Камера видеонаблюдения Samsung 2',
    price: 3500
  },
  {
    id: 3,
    name: 'Камера видеонаблюдения Xiaomi 3',
    price: 2000
  },
  {
    id: 4,
    name: 'Камера видеонаблюдения Xiaomi 4',
    price: 1345
  },
  {
    id: 1,
    name: 'Камера видеонаблюдения Xiaomi 1',
    price: 2841
  },
  {
    id: 2,
    name: 'Камера видеонаблюдения Samsung 2',
    price: 3500
  },
  {
    id: 3,
    name: 'Камера видеонаблюдения Xiaomi 3',
    price: 2000
  },
  {
    id: 4,
    name: 'Камера видеонаблюдения Xiaomi 4',
    price: 1345
  }
]
</script>

<template>
  <div class="catalog-container">
    <section class="catalog-filter">
      <div class="filter-container">
        <div><b>Производитель</b></div>
        <ul>
          <li><label><input type="checkbox"> Samsung</label></li>
          <li><label><input type="checkbox"> Xiaomi</label></li>
          <li><label><input type="checkbox"> Apple</label></li>
        </ul>
      </div>
      <div class="filter-container">
        <div><b>Цвет</b></div>
        <ul>
          <li><label><input type="checkbox"> Белый</label></li>
          <li><label><input type="checkbox"> Синий</label></li>
          <li><label><input type="checkbox"> Красный</label></li>
          <li><label><input type="checkbox"> Жёлтый</label></li>
        </ul>
      </div>
      <div class="filter-container">
        <div><b>Стиль</b></div>
        <ul>
          <li><label><input type="checkbox"> Лофт</label></li>
          <li><label><input type="checkbox"> Современный</label></li>
          <li><label><input type="checkbox"> Классический</label></li>
        </ul>
      </div>
    </section>

    <section class="row list-products">
      <div class="product-column" v-for="product in products">
        <Product :product="product" />
      </div>
    </section>
  </div>
</template>

<style scoped>
  .catalog-container {
    display: flex;
  }

  .catalog-container .catalog-filter {
    min-width: 200px;
    background-color: #fff;
    padding: 15px;
  }

  .catalog-container .list-products {
    margin-left: 15px;
  }

  .filter-container {
    margin-bottom: 15px;
    border-bottom: 1px solid #eee;
  }

  .filter-container ul {
    list-style: none;
    padding-left: 0;
    margin-top: 5px;
  }
</style>
