<template>
  <div class="product-item">
    <router-link to="/">
      <div class="img-container"><img src="@/assets/img/image.jpg" /></div>
      <div class="product-info">
        <div><span class="price">3 500 &#8381;</span></div>
        <h3 class="text-blue">Клавиатура Asus PK-100S</h3>
      </div>
    </router-link>
    <button data-id="1">Купить</button>
  </div>
</template>

<style scoped>
  .product-item {
    border: 1px solid var(--color-secondary);
    padding: 15px;
    transition: ease-in-out background-color .1s;
  }

  .product-item a {
    display: block;
    text-decoration: none;
    color: var(--text-primary);
  }

  .product-item:hover {
    background-color: var(--color-secondary);
  }

  .product-item h3 {
    margin-top: 0;
    font-weight: normal;
    font-size: 16px;
  }

  .product-item button {
    background-color: var(--color-primary);
    width: 100%;
    padding: 12px 15px;
    border: none;
    border-radius: 6px;
    text-transform: uppercase;
  }

  .product-item .price {
    color: var(--color-price);
    font-size: 22px;
    font-weight: bold;
  }

  .product-item img {
    width: 100%;
  }
</style>