<template>
    <slot name="header"  :activeIndex="activeIndex" ></slot>
    <div class="reveal h-[calc(100vh-5rem)]">
        <div class="slides">
            <slot name="sections" ></slot>
        </div>
      </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import Reveal from 'reveal.js';

import Highlight from 'reveal.js/plugin/highlight/highlight.esm';
import "reveal.js/plugin/highlight/monokai.css"

const activeIndex = ref(1)

onMounted(() => {
  const deck = new Reveal({
    progress: true,
  })
  deck.initialize({
    plugins :[Highlight]
  });
  deck.on('slidechanged', event => {
    const slide =deck.getCurrentSlide(); 
    activeIndex.value = slide.dataset.index
  });
})
</script>

<style scoped>

</style>