<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

import { ref } from 'vue'

const productCode = ref();

function printCode () {
    console.log(productCode.value);
}
</script>

<template>
    <AppLayout title="Create product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Product
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full">
                    <h1>Hola mundo</h1>
                    <div>
                        <InputLabel for="productcode" value="Product code" />
                        <TextInput id="productcode" v-model="productCode" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <PrimaryButton class="ms-4" type="button" @click="printCode">
                            Register
                        </PrimaryButton>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
