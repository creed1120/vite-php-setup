<template>
    <div id="template-container" class="text-center pt-6 flex flex-col items-center justify-center text-slate-700">
        <span class="text-4xl">{{ newproduct }}</span>
    </div>
</template>

<script setup>

    // this is how to inject PHP variables into Vue component
    import { ref, onMounted } from 'vue'
    const newproduct = ref('')
    onMounted(() => {
        const ele = document.getElementById('product')
        newproduct.value = ele.dataset.newproduct
    });

</script>

<style scoped>
</style>