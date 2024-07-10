<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>

<template>
    <AppLayout title="Product List">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Product List
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full flex p-4">
                    <div>
                        <PrimaryButton>
                            Add Product
                        </PrimaryButton>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
