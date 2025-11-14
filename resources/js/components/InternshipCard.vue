<script setup>
import { defineProps, computed } from 'vue';

const props = defineProps({
    internship: Object,
    required: true,
});

const timeAgo = computed(() => {
    if (!props.internship?.created) return '';

    const created = new Date(props.internship.created);
    const now = new Date();
    const diffMs = now - created; // difference in milliseconds

    const diffHrs = Math.floor(diffMs / (1000 * 60 * 60)); // hours
    if (diffHrs < 24) {
        return `${diffHrs} hour${diffHrs !== 1 ? 's' : ''} ago`;
    } else {
        const diffDays = Math.floor(diffHrs / 24);
        return `${diffDays} day${diffDays !== 1 ? 's' : ''} ago`;
    }
});

const shortDescription = computed(() => {
    if (!props.internship?.description) return '';
    const words = props.internship.description.split(' ');
    if (words.length <= 14) return props.internship.description;
    return words.slice(0, 14).join(' ') + '...';
});
</script>
<template>
    <div v-if="internship" class="bg-neutral-primary-soft block max-w-sm p-5 border border-default rounded-2xl shadow-xs">
        <div class="text-xl font-semibold tracking-tight text-heading">
            {{ internship.title }}
        </div>
        <p class="text-md my-1">
            {{ internship.recruiter?.company_name }}
        </p>

        <div class="flex gap-2">
            <span class="text-xs font-medium px-1.5 py-1 rounded bg-green-500 text-white">
                {{ internship.job_category }}
            </span>
        </div>

        <div class="my-2">
            {{ internship.recruiter?.location }}
        </div>

        <p class="text-gray-600 text-sm my-2">
            {{ shortDescription }}
        </p>

        <div class="grid grid-cols-2 items-center">
            <div class="text-gray-600 text-sm text-left">
                {{ timeAgo }}
            </div>
            <div class="text-gray-600 flex justify-end gap-2">
                <i class="bi bi-ban"></i>
                <i class="bi bi-bookmark"></i>
            </div>
        </div>
    </div>
</template>
