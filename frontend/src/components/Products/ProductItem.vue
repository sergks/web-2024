<script setup>
defineProps({
    product: {}
})
</script>

<template>
    <div class="product-item">
        <div class="img-container">
            <img src="https://avatars.mds.yandex.net/get-mpic/2017233/img_id2997718704707434454.jpeg/450x600">
        </div>
        <h3>{{ product.name }}</h3>
        <div class="row vertical-center between">
            <div>
                <button class="btn-cart">Заказать</button>
            </div>
            <div class="price">{{ product.price }} ₽</div>
        </div>
        <div class="hover-block"></div>
        <div class="sale">
            <img src="@/assets/img/sale.png">
        </div>
    </div>
</template>

