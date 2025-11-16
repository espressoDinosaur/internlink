<script setup>
import { computed } from 'vue';

const props = defineProps({
    file: {
        type: Object,
        required: true
    }
});

// Compute extension safely
const extension = computed(() => {
    return props.file.attachment_filename.split('.').pop().toLowerCase();
});

const iconClass = computed(() => {
    const icons = {
        pdf: 'bi bi-file-earmark-pdf-fill',
        docx: 'bi bi-file-earmark-word-fill',
        xlsx: 'bi bi-file-earmark-excel-fill',
    };
    return icons[extension.value] || 'bi bi-file-earmark-fill';
});

const colorClass = computed(() => {
    const colors = {
        pdf: 'text-[#FB3748]',
        docx: 'text-blue-600',
        xlsx: 'text-[#1FC16B]',
    };
    return colors[extension.value] || 'text-gray-500';
});
</script>

<template>
    <div class="border-l-4 pl-3 mb-4 border-[#205E87]">
        <div class="flex justify-between items-center">
            <div class="font-bold flex items-center">
                <span class="mr-2" :class="colorClass"><i :class="iconClass"></i></span>
                {{ props.file.attachment_filename }}
            </div>
            <div class="text-gray-400 cursor-pointer">
                <i class="bi bi-trash-fill"></i>
            </div>
        </div>
        <div class="text-gray-500">
            Uploaded {{ new Date(props.file.created_uploaded).toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' }) }}
        </div>
    </div>
</template>
