<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'block py-2.5 px-4 rounded transition duration-200 bg-gray-700'
        : 'block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700';
});
</script>

<template>
    <Link :href="href" :class="classes">
    <slot />
    </Link>
</template>
