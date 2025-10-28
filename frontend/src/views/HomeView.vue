<script setup lang="ts">
import ProductItem from "@/components/Catalog/ProductItem.vue";
import CategoryItem from "@/components/Catalog/CategoryItem.vue";
import {ref} from "vue";

const products = ref([
  {
    id: 1,
    name: 'Товар 1',
    price: 3500
  },
  {
    id: 2,
    name: 'Товар 2',
    price: 3600
  },
  {
    id: 3,
    name: 'Товар 3',
    price: 3600
  },
  {
    id: 4,
    name: 'Товар 4',
    price: 3600
  },
  {
    id: 5,
    name: 'Товар 5',
    price: 3600
  }
])
</script>

<template>
  <div class="container">
    <h1>Новые поступления</h1>

    <section class="categories">
      <CategoryItem>
        <slot>
          ksdjflksdjflkdsjflk
          skdfjlksdf
          sdkfjlksdjdf
          jksldjflksd
        </slot>
      </CategoryItem>
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
      <CategoryItem />
    </section>

    <section class="products">
      <ProductItem
          v-for="item in products"
          :id="item.id"
          :name="item.name"
          :price="item.price"
      />
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