<script setup>
import Attachment from './Attachment.vue';

defineProps({
    attachments: {
        type: Array,
        default: () => []
    }
});
</script>

<template>
    <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs">
        <div class="mb-3 text-xl font-bold text-[[#205E87]]">
            Attachments
        </div>
        <hr class="my-3">
        <div v-if="attachments.length">
            <Attachment 
                v-for="file in attachments" 
                :key="file.id" 
                :file="file" 
            />
        </div>
        <div v-else class="text-gray-500">
            No attachments yet.
        </div>
    </div>
</template>