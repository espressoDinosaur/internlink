<script setup lang="ts">
import { defineEmits, defineProps } from 'vue';

const props = defineProps({
    modelValue: Boolean,
});

const emit = defineEmits(['update:modelValue']);

const close = () => {
    emit('update:modelValue', false);
};

const stopClick = (e: Event) => {
    e.stopPropagation();
};
</script>

<template>
    <div v-if="modelValue" @click="close" class="fixed inset-0 z-50 flex items-center justify-center bg-black/30">
        <div @click.stop="stopClick" class="m-3 flex w-full flex-col rounded-2xl border border-gray-200 bg-white px-4 py-8 shadow-2xs sm:mx-auto sm:max-w-md">
            <div class="mb-2 flex items-center justify-center">
                <div class="relative h-20 w-20">
                    <div class="absolute inset-0 rounded-full bg-[#FEE4E2]"></div>
                    <div class="absolute inset-0 rounded-full border-8 border-[#FEF3F2]"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="bi bi-check-circle-fill text-3xl text-[#FB3748]"></i>
                    </div>
                </div>
            </div>
            <div class="overflow-y-auto text-center">
                <h3 class="text-xl font-bold">Does this work for you?</h3>
                <p class="mt-1 px-4 text-sm text-gray-500">
                    Your changes have been saved successfully! If you need to make any adjustments, you can come back.
                </p>
            </div>
            <div class="flex gap-3 pt-4">
                <button @click="close" class="flex-1 rounded-lg border border-gray-200 bg-white py-3 text-sm font-medium text-gray-800 shadow hover:bg-gray-50" >
                    Close
                </button>
                <button class="flex-1 rounded-lg border border-transparent bg-[#FB3748] py-3 text-sm font-medium text-white">
                    Yes
                </button>
            </div>
        </div>
    </div>
</template>
