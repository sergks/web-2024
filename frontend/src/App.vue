<script setup>
import { RouterLink, RouterView } from 'vue-router'
import {ref} from 'vue'
import Header from "@/components/Site/Header.vue";
import Footer from "@/components/Site/Footer.vue";

const searchResult = ref('')
const isShowSearch = ref(false)

const search = () => {
  isShowSearch.value = searchResult.value.length >= 3
}
</script>

<template>
  <div class="wrap">
    <Header />

    <main>
      <div class="container">
        <RouterView />
      </div>
    </main>
  </div>

  <Footer />
</template>
