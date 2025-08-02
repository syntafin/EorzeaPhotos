<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import Card from '@/components/Card.vue';
</script>

<template>
    <AppLayout>
        <div class="container">
            <Card class="">
                <template #header>
                    <h2 class="text-lg font-semibold">Dashboard</h2>
                </template>
                <h1>Index</h1>
                <template #footer>
                    <p>Footer</p>
                </template>
            </Card>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>