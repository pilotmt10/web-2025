<template>
  <header>
    <div class="container">
      <div class="logo">
        <router-link to="/">
          <img src="@/assets/img/logo.png" />
        </router-link>
      </div>
      <div class="menu">
        <router-link to="/">Каталог</router-link>
      </div>
      <div class="search">
        <input type="text">
      </div>
      <nav>
        <ul>
          <li><router-link to="/">Заказы</router-link></li>
          <li><router-link to="/">Избранное</router-link></li>
          <li><router-link to="/">Корзина</router-link></li>
          <li><router-link to="/">Войти</router-link></li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<style>
  header {
    border-bottom: 1px solid #eee;
    padding: 15px 0;
  }

  header .container {
    display: flex;
    gap: 25px;
    align-items: center;
  }

  header .logo img {
    width: 150px;
  }

  header nav {
    margin-left: auto;
  }

  header ul {
    display: flex;
    gap: 15px;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  header ul li a {
    text-decoration: none;
    color: var(--text-secondary);
    font-size: 14px;
  }

  header .menu {
    background-color: var(--color-primary);
    padding: 12px 20px;
    border-radius: 6px;
  }

  header .menu a {
    color: var(--text-primary);
    text-decoration: none;
  }

  header .search {
    width: 100%;
  }

  header .search input {
    width: 100%;
    padding: 12px 10px;
    border-radius: 6px;
    border: 2px solid var(--color-primary);
  }
</style>