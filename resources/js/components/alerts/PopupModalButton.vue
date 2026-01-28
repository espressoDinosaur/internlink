<script setup lang="ts">
import { ref } from 'vue';
import PopupModal from './PopupModal.vue';

const isOpen = ref(false);

const openModal = () => {
  isOpen.value = true;
};
</script>
<template>
    <button @click="openModal" class="rounded-md bg-[#205E87] px-6 py-3 font-medium text-white">
        Apply
    </button>
    <PopupModal v-model="isOpen" />
</template>