<script setup lang="ts">
import ProductItem from "@/components/Catalog/ProductItem.vue";
import CategoryItem from "@/components/Catalog/CategoryItem.vue";
</script>

<template>
  <div class="container">
    <h1>Новые поступления</h1>

    <section class="categories">
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
    </section>

    <section class="products">
      <ProductItem />
      <ProductItem />
      <ProductItem />
      <ProductItem />
      <ProductItem />
      <ProductItem />
      <ProductItem />
      <ProductItem />
    </section>
  </div>
</template>

<style>

  .categories {
    display: flex;
    justify-content: space-between;
    gap: 15px;
  }

  .products {
    display: grid;
    grid-template-columns: auto auto auto auto;
    gap: 15px;
    margin-top: 25px;
  }
</style>