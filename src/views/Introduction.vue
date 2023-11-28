<script setup>

import Layout from "../layouts/index.vue";
import Infection from "./Infection.vue";
import Capabilities from "./Capabilities.vue";
import Dammages from "./Dammages.vue";
import Prevention from "./Prevention.vue";
</script>

<template>
  <Layout>
    <template #header="{ activeIndex }">
      <div class="w-full  px-20  mt-5 ">
        <div class="transition-transform flex justify-center text-base-content duration-300">
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 1"
            :class="[activeIndex == 1 && ' scale-150 text-blue-500 font-semibold']">Injection Attacks</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 2"
            :class="[activeIndex == 2 && 'scale-150 text-blue-500 font-semibold']">Rating</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 3"
            :class="[activeIndex == 3 && 'scale-150 text-blue-500 font-semibold']">Types of injection attacks</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 4"
            :class="[activeIndex == 4 && 'scale-150 text-blue-500 font-semibold']">Types of injection attacks</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 5"
            :class="[activeIndex == 5 && 'scale-150 text-blue-500 font-semibold']">Types of injection attacks</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 6"
            :class="[activeIndex == 6 && 'scale-150 text-blue-500 font-semibold']">Dammages</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 7"
            :class="[activeIndex == 7 && 'scale-150 text-blue-500 font-semibold']">Prevention</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 8"
            :class="[activeIndex == 8 && 'scale-150 text-blue-500 font-semibold']">Prevention</div>
          <div class="text-lg transition-all duration-200" v-if="activeIndex == 9"
            :class="[activeIndex == 9 && 'scale-150 text-blue-500 font-semibold']">Prevention</div>
            <div class="text-lg transition-all duration-200" v-if="activeIndex == 10"
            :class="[activeIndex == 10 && 'scale-150 text-blue-500 font-semibold']">Conculsion</div>
        </div>
      </div>
    </template>

    <template #sections>
      <section data-index="1" class="flex items-center  h-full">
        <div class="p-4 rounded-xl  bg-gradient-to-r from-blue-600 to-blue-800 mt-40">
          <div class="flex justify-center gap-3 items-center">
          
            <div class="text-7xl">Definition</div>
          </div>
          <p class="text-4xl">
            Injection attacks refer to a broad class of attack vectors. In an injection attack, an attacker supplies
            untrusted input to a program. This input gets processed by an interpreter as part of a command or query. In
            turn, this alters the execution of that program.
          </p>
        </div>

      </section>

      <section data-index="2">

        <div class="p-4 rounded-xl  bg-gradient-to-r from-blue-600 to-blue-800 ">
          <p class="text-4xl">
            This attack type is considered a major problem in web security. It is listed as the number one web application
            security risk in the OWASP Top 10 – and for a good reason. Injection attacks, particularly SQL Injections
            (SQLi attacks) and Cross-site Scripting (XSS), are not only very dangerous but also widespread, especially in
            legacy applications. </p>
        </div>

      </section>

      <section data-index="3">
        <div class="flex  flex-col items-center mt-10">
          <img src="../assets/sql.jpeg" class="rounded-lg " alt="">
        </div>
      </section>

      <Infection />
      <Capabilities />
      <Dammages />
      <Prevention />

    </template>

  </Layout>
</template>