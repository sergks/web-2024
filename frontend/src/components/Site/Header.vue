<template>
    <header>
        <div class="container row between vertical-center">
            <div>
                <img class="logo" src="https://static.tildacdn.com/tild3831-3438-4336-a537-623062643364/ya-market.png" />
            </div>
            <div class="search">
                <input type="text" placeholder="Найти товары" v-model="searchResult" @keyup="search">
                <ul class="search-result" v-show="isShowSearch">
                    <li>Товар 1</li>
                    <li>Товар 2</li>
                    <li>Товар 3</li>
                </ul>
            </div>
            <nav>
                <ul class="row">
                    <li><router-link to="/">Главная</router-link></li>
                    <li><router-link to="/catalog">Каталог</router-link></li>
                    <li><router-link to="/about">О нас</router-link></li>
                    <li><router-link to="/contact">Наши контакты</router-link></li>
                    <li><router-link to="/login">Войти</router-link></li>
                    <li class="cart">
                        <img src="@/assets/img/icon-cart.png">
                        <span class="badge"></span>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script setup>
import {RouterLink} from "vue-router";
</script>
