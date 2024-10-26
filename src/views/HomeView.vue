<script setup>
import Product from "@/components/Catalog/Product.vue";
import Carousel from "@/components/Carousel/Carousel.vue";

const products = [
  {
    id: 1,
    name: 'Камера видеонаблюдения Xiaomi 1',
    price: 2841,
    isSale: true
  },
  {
    id: 2,
    name: 'Камера видеонаблюдения Samsung 2',
    price: 3500,
    isSale: true
  },
  {
    id: 3,
    name: 'Камера видеонаблюдения Xiaomi 3',
    price: 2000,
    isSale: true
  },
  {
    id: 4,
    name: 'Камера видеонаблюдения Xiaomi 4',
    price: 1345,
    isSale: false
  }
]
</script>

<template>
  <Carousel />

  <h1>Каталог товаров</h1>

  <section class="row list-products">
    <div class="product-column" v-for="product in products">
      <Product :product="product" />
    </div>
  </section>
</template>
