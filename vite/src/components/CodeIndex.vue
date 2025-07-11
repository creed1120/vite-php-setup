<template>
    <div id="template-container" class="text-center p-10 flex flex-col items-center justify-center text-slate-700">
        <!-- <img class="inline-flex" alt="Vue logo" :src="imgUrl" height="40" /> -->
        <h1 class="text-6xl">{{ msg }}</h1>
        <p class="text-5xl">{{ phpmsg }}</p><br>
        <p>{{ books }}</p>

    </div>
</template>

<script setup>
    const imgUrl = new URL('../assets/logo.png', import.meta.url).href;
    defineProps({
        msg: String,
        phpmsg: String,
        books: {
            type: Array,
            default: () => [
                { title: 'The Great Gatsby', author: 'F. Scott Fitzgerald' },
                { title: 'To Kill a Mockingbird', author: 'Harper Lee' },
                { title: '1984', author: 'George Orwell' },
                { title: 'Pride and Prejudice', author: 'Jane Austen' },
                { title: 'The Catcher in the Rye', author: 'J.D. Salinger' }
            ]
        }
    });
</script>

<style scoped>
h3 {
    color: #42b983;
    font-size: 3rem;
}
</style>