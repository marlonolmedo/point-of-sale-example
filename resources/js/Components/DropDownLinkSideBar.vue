<script setup>
import { computed, ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    name: String,
    active: Boolean,
});
const changedAtt = ref(false);

const classes = computed(() => {
    return changedAtt.value
        ? 'bg-gray-700 mt-1 rounded-md shadow-lg absolute w-full z-10'
        : 'bg-gray-700 mt-1 rounded-md shadow-lg absolute w-full z-10 hidden';
});

function actionchanged () {
    changedAtt.value = changedAtt.value ? false : true;
};

</script>

<template>
    <div class="relative" @click="actionchanged">
        <!-- <input type="checkbox" id="dropdown-toggle" class="hidden"> -->
        <label for="dropdown-toggle"
            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 cursor-pointer">
            {{props.name}}
        </label>
        <div :class="classes">
            <!-- <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600" href="#">
                Option 1
            </a>
            <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600" href="#">
                Option 2
            </a>
            <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-600" href="#">
                Option 3
            </a> -->
            <slot />
        </div>
    </div>
</template>
