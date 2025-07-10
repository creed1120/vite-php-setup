<template>
  <div class="bg-slate-200 text-center p-10 h-screen">
    <img class="inline-flex" alt="Vue logo" :src="imgUrl" height="40" />

    <h1 class="text-6xl">{{ msg }}</h1>

    <p>
      <a href="https://vitejs.dev/guide" target="_blank">
        Vite Documentation
      </a>
      |
      <a href="https://vuejs.org/guide" target="_blank">Vue 3 Documentation</a>
    </p>

    <button type="button" @click="count++">
      count is: {{ count }}
    </button>
    <p>
      Edit
      <code>components/HelloWorld.vue</code> to test the hot module replacement.
    </p>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const imgUrl = new URL('../assets/logo.png', import.meta.url).href

defineProps({
  msg: String
})

const count = ref(0)
</script>

<style scoped>
a {
  color: #42b983;
}
body {
  background-color: orange;
}
</style>
