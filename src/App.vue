<template>
  <div class="wrap">
    <header class="row justify">
      <img src="@/assets/img/image.jpg" width="100" />
      <ul class="row">
        <li><RouterLink to="/">Главная</RouterLink></li>
        <li><RouterLink to="/about">О компании</RouterLink></li>
        <li><RouterLink to="/login">Авторизация</RouterLink></li>
      </ul>
    </header>

    <main>
      <router-view />
    </main>
  </div>

  <footer class="row justify">
    <div>
      &copy; БГТУ 2025
    </div>
    <div>
      Ссылка на ТГ
    </div>
  </footer>
</template>

<style>
  .router-link-active {
    color: red;
  }
</style>