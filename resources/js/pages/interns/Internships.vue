<script setup>
import { defineProps } from 'vue';
import InternshipCard from '@/components/InternshipCard.vue';
import InternshipCardDescription from '@/components/InternshipCardDescription.vue';
import Navbar from '@/components/Navbar.vue';
const props = defineProps({
    internships: Array
});
</script>
<template>
    <Navbar />
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20">
        <div class="grid grid-cols-3 gap-4 h-[calc(100vh-4rem)]">
            <!-- Left Column: Internship Cards -->
            <div class="overflow-y-auto h-full">
                <div v-for="internship in props.internships" :key="internship.id" class="mb-4">
                    <InternshipCard :internship="internship" />
                </div>
            </div>

            <!-- Right Column: Job Description -->
            <div class="col-span-2 overflow-y-auto h-full pl-2">
                <div class="">
                    <InternshipCardDescription />
                </div>
            </div>
        </div>
    </div>
</template>
