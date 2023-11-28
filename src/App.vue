<script setup>
import { RouterView } from 'vue-router'
</script>

<template>
  <div class="">
    <RouterView v-slot="{ Component }">
      <transition 
      enter-active-class="transition-all duration-300"
      leave-active-class="transition-all duration-300"
      enter-from-class="opacity-0"
      leave-to-class="opacity-0"
      >
        <component :is="Component" />
      </transition>


    </RouterView>
  </div>
</template>

<style scoped>
</style>
