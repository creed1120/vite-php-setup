<template>
    <div id="template-container" class="text-center flex flex-col items-center justify-center text-slate-700">
        <!-- <img class="inline-flex" alt="Vue logo" :src="imgUrl" height="40" /> -->
        <h1 class="text-6xl">{{ msg }}</h1>
        <p class="text-5xl">{{ phpmsg }}</p><br>
        <h3>Books List</h3>
        <ul>
            <li v-for="(book, index) in books" :key="index">
                {{ book.title }} by {{ book.author }}
            </li>
        </ul>
        <br>
        <p class="text-4xl py-6">{{ featureitem }}</p>
        <p class="text-4xl">Username: {{ username }}</p>
    </div>
</template>

<script setup>
    const imgUrl = new URL('../assets/logo.png', import.meta.url).href;

    /***********************************************************
     * this is how to inject PHP variables into Vue component
     ***********************************************************/
    import { ref, onMounted } from 'vue'
    const featureitem = ref('')
    const username = ref('')
    onMounted(() => {
    const el = document.getElementById('app')
    const element = document.getElementById('user')
    featureitem.value = el.dataset.featureitem
    username.value = element.dataset.username
    })

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