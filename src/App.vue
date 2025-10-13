<script setup lang="ts">

import Header from "@/components/App/Header.vue";
import Footer from "@/components/App/Footer.vue";

</script>

<template>
  <Header />

  <main>
    <router-view />
  </main>

  <Footer />

</template>

<style>
  main {
    margin: 25px 0 45px;
  }
</style>