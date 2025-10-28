<template>
    <component :is="useRoute().meta.layout">
      <slot />
    </component>
</template>

<style>
  main {
    margin: 25px 0 45px;
  }
</style>

<script setup lang="ts">

import {useRoute} from "vue-router";
</script>