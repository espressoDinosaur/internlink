<script setup>
import Experience from './Experience.vue';

defineProps({
    experiences: {
        type: Array,
        default: () => []
    }
});
</script>

<template>
    <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs">
        <div class="mb-3 text-xl font-bold text-[[#205E87]]">
            Professional experience
        </div>
        <hr class="my-3">
        <div v-if="experiences.length">
            <Experience 
                v-for="exp in experiences" 
                :key="exp.id" 
                :experience="exp" 
            />
        </div>

        <div v-else class="text-gray-500">
            No experience data yet.
        </div>
    </div>
</template>