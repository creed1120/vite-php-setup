<template>
    <div id="template-container" class="text-center py-6 flex flex-col items-center justify-center text-slate-700">
        <p class=" text-4xl">Username: {{ phpfeatureitem }}</p>
    </div>
</template>

<script setup>

    // this is how to inject PHP variables into Vue component
    import { ref, onMounted } from 'vue'
    const phpfeatureitem = ref('')
    onMounted(() => {
        const ele = document.getElementById('feature')
        phpfeatureitem.value = ele.dataset.phpfeatureitem
    });

</script>

<style scoped>
</style>