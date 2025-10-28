<script setup>
  import {ref} from "vue";

  const login = ref('')
  const password = ref('')

  const loginError = ref()
  const passwordError = ref()

  const submitForm = (event) => {
    event.preventDefault()

    loginError.value = ''
    passwordError.value = ''

    if (login.value.trim().length === 0) {
      loginError.value = 'Заполните Email.'
    }

    if (password.value.trim().length === 0) {
      passwordError.value = 'Заполните Пароль.'
    }
  }

  const keyUp = () => {
    if (login.value.trim().length === 0) {
      loginError.value = 'Заполните Email.'
    } else {
      loginError.value = ''
    }
  }
</script>

<template>
  <section class="login-form">
    <form @submit="submitForm" action="/login">
      <div class="form-group">
        <input type="email" placeholder="Email" v-model="login" @keyup="keyUp">
        <div class="error">{{ loginError }}</div>
      </div>
      <div class="form-group">
        <input type="password" placeholder="Пароль" v-model="password">
        <div class="error">{{ passwordError }}</div>
      </div>
      <div class="form-group">
        <button type="submit">Войти</button>
      </div>
    </form>
  </section>
</template>

<style>
  .login-form {
    width: 350px;
    margin: 0 auto;
  }

  .login-form .form-group {
    margin-bottom: 15px;
  }

  .login-form input {
    width: 100%;
    border: 2px solid var(--color-primary);
    border-radius: var(--border-card);
    padding: 10px 15px;
  }

  .login-form button {
    width: 100%;
    background-color: var(--color-primary);
    padding: 15px 25px;
    border: none;
    border-radius: var(--border-card);
  }

  .login-form .error {
    color: red;
    font-size: 13px;
  }
</style>
<script setup lang="ts">
</script>