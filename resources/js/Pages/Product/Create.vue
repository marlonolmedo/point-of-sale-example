<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
import Checkbox from '@/Components/Checkbox.vue';

import { ref } from 'vue'

const productCode = ref();

function printCode() {
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
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full grid gap-4 p-4 grid-cols-1 md:grid-cols-3">
                    <div>
                        <InputLabel for="typeproduct" value="Type of Product" class="mb-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="nameproduct" value="Name Product" />
                        <TextInput id="nameproduct" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="productcode" value="Product code" />
                        <TextInput id="productcode" v-model="productCode" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="barcodesymbology" value="Barcode Symbology" class="mb-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="barcodesymbology" value="Barcode Symbology" />
                        <TextInput id="barcodesymbology" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="brand" value="Brand" class="mb-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="category" value="Category" class="mb-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="productunit" value="Product Unit" class="mb-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="saletunit" value="Sale Unit" class="mb-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="purchaseunit" value="Purchase Unit" class="mb-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="productcost" value="Product Cost" />
                        <TextInput id="productcost" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="productprice" value="Product Price" />
                        <TextInput id="productprice" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="productgain" value="Product Gain" />
                        <TextInput id="productgain" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="productgainpercentage" value="Product Gain Percentage" />
                        <TextInput id="productgainpercentage" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="alertQuantity" value="Alert Quantity" />
                        <TextInput id="alertQuantity" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <InputLabel for="producttax" value="Product Tax" class="mt-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div>
                        <InputLabel for="taxmethod" value="Tax Method" class="mt-1" />
                        <vSelect :options="['Canada', 'United States']"></vSelect>
                    </div>
                    <div class="flex self-center">
                        <Checkbox class="mr-5"/>
                        <InputLabel value="Featured" />
                    </div>
                    <div class="md:col-span-3">
                        <InputLabel for="productimage" value="Product Image" class="mt-1" />
                        <input type="file">
                    </div>
                    <div class="md:col-span-3">
                        <InputLabel for="productdetails" value="Product Details" class="mt-1" />
                        <textarea name="productdetails" id="productdetails"
                            class="w-full rounded form-textarea"></textarea>
                    </div>
                    <div class="flex self-center md:col-span-3">
                        <Checkbox class="mr-5"/>
                        <InputLabel value="This product has different price for different warehouse" />
                    </div>
                    <div class="flex self-center md:col-span-3">
                        <Checkbox class="mr-5"/>
                        <InputLabel value="This product has batch and expired date"/>
                    </div>
                    <div class="flex self-center md:col-span-3">
                        <Checkbox class="mr-5"/>
                        <InputLabel value="This product has variant"/>
                    </div>
                    <div class="flex self-center md:col-span-3">
                        <Checkbox class="mr-5"/>
                        <InputLabel value="Add Promotional Price"/>
                    </div>

                    <div class="md:col-span-3 mt-4">
                        <PrimaryButton class="ms-4" type="button" @click="printCode">
                            Register
                        </PrimaryButton>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
