<script setup lang="ts">

</script>

<template>
    <div class="divide-y divide-slate-200 dark:divide-slate-800 overflow-hidden rounded-lg bg-slate-100 dark:bg-slate-900 shadow">
        <div v-if="$slots.header" class="px-4 py-5 sm:px-6">
            <slot name="header" />
        </div>
        <div class="px-4 py-5 sm:p-6">
            <slot />
        </div>
        <div v-if="$slots.footer" class="px-4 py-4 sm:px-6 bg-slate-200 dark:bg-slate-800">
            <slot name="footer" />
        </div>
    </div>
</template>

<style scoped>

</style>