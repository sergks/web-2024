<script setup>
import Product from "@/components/Catalog/Product.vue";
import Carousel from "@/components/Carousel/Carousel.vue";
import axios from "axios";
import {ref} from "vue";

const products = ref([])
const load = ref(true)

axios.get('catalog/top')
    .then((response) => products.value = response.data)
    .finally(() => load.value = false)

</script>

<template>

  <Carousel></Carousel>

  <h1>Каталог товаров</h1>

  <div class="preloader" v-if="load">
    <img src="@/assets/img/preloader.gif" />
  </div>

  <section class="row list-products">
    <div class="product-column" v-for="item in products">
        <Product :product="item" />
    </div>
  </section>
</template>

<style>
  .preloader {
   text-align: center;
  }
</style>
