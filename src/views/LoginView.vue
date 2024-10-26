<script setup>
import {ref} from 'vue'

const login = ref('')
const password = ref('')

const loginError = ref('')
const passwordError = ref('')

const singIn = (event) => {
  if (login.value.length === 0) {
    loginError.value = 'Заполните логин.'
  } else {
    loginError.value = ''
  }

  if (password.value.length === 0) {
    passwordError.value = 'Заполните пароль.'
  } else {
    passwordError.value = ''
  }

  event.preventDefault()
}
</script>

<template>
  <section class="login-form">
    <h1>Авторизация</h1>
    <br/>
    <form @submit="singIn">
      <div class="form-item">
        <input name="login" type="text" placeholder="Логин" v-model="login">
        <div class="error">{{ loginError }}</div>
      </div>
      <div class="form-item">
        <input name="password" type="password" placeholder="Пароль" v-model="password">
        <div class="error">{{ passwordError }}</div>
      </div>
      <br/>
      <div class="form-item">
        <button class="btn-login">Войти</button>
      </div>
    </form>
  </section>
</template>