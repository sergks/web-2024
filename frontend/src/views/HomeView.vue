<script setup>
import Product from "@/components/Catalog/Product.vue";
import Carousel from "@/components/Carousel/Carousel.vue";
import {ref} from "vue";
import axios from "axios";

const products = ref([])

axios.get('products/top')
    .then((response) => products.value = response.data)

</script>

<template>

  <Carousel></Carousel>

  <h1>Каталог товаров</h1>

  <section class="row list-products">
    <div class="product-column" v-for="item in products">
        <Product :product="item" />
    </div>
  </section>
</template>
