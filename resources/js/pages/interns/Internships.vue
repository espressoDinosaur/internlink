<script setup>
import { ref } from 'vue';
import InternshipCard from '@/components/InternshipCard.vue';
import InternshipCardDescription from '@/components/InternshipCardDescription.vue';
import Navbar from '@/components/Navbar.vue';

const props = defineProps({
    internships: Array
});

const selectedInternship = ref(props.internships.length ? props.internships[0] : null);

const selectInternship = (internship) => {
    selectedInternship.value = internship;
};
</script>

<template>
    <Navbar />
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20">
        <div class="grid grid-cols-3 gap-4 h-[calc(100vh-4rem)]">
            <div class="overflow-y-auto h-full p-1">
                <div 
                    v-for="internship in props.internships" 
                    :key="internship.id" 
                    class="mb-4"
                    @click="selectInternship(internship)"
                >
                    <InternshipCard 
                        :internship="internship"
                        :selected="selectedInternship && selectedInternship.id === internship.id"
                    />
                </div>
            </div>
            <div class="col-span-2 overflow-y-auto h-full pl-2">
                <InternshipCardDescription 
                    v-if="selectedInternship" 
                    :internship="selectedInternship" 
                />
                <div v-else class="text-center py-10 text-gray-500">
                    Select an internship to view details
                </div>
            </div>
        </div>
    </div>
</template>
