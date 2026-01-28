<script setup>
defineProps({
    title: String,
    category: String,
    jobType: String,
    workArrangement: String,
    paidInternship: String,
    payFrom: String,
    payTo: String,
    payType: String,
    skills: Array,
    jobDescription: String
});
</script>
<template>
    <div class="">
        <!-- Top Menu -->
        <div class="">
            <div class="grid grid-cols-2 items-center">
                <div class="">
                    <img src="/src/internlink-text.png" alt="Logo" class="h-15 w-auto" />
                </div>
                <div class="text-gray-600 flex justify-end gap-2">
                    <i class="bi bi-three-dots-vertical"></i>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="font-bold text-4xl text-[#205E87] mt-4">
            {{ title || 'Job Title' }}
        </div>
        <div class="text-gray-600 text-lg">
            Central Luzon State University
        </div>
        <div class="my-2">
            <p class="my-1">
                <i class="bi bi-geo-alt mr-2"></i>
                {{ jobType || 'Job Type' }} ({{ workArrangement || 'Work Arrangement' }})
            </p>
            <p class="my-1">
                <i class="bi bi-buildings mr-2"></i>
                {{ category || 'Category' }}
            </p>
            <p class="my-1">
                <i class="bi bi-cash-stack mr-2"></i>
                {{ paidInternship === 'yes' ? `₱${payFrom || '0'} - ₱${payTo || '0'} (${payType || ''})` : 'Not paid' }}
            </p>
        </div>
        <div class="my-2">
            <div class="flex flex-wrap gap-2 mt-1">
                <span v-for="(skill, index) in skills" :key="index"
                    class="bg-gray-300 px-3 py-1 rounded-full text-sm font-medium">
                    {{ skill }}
                </span>
            </div>
        </div>
        <div class="text-gray-600">
            Posted 3 Hours ago<span class="mx-2">•</span>Medium application volume
        </div>
        <!-- Action Buttons -->
        <div class="my-6 flex gap-2">
            <button class="rounded-md bg-[#205E87] px-6 py-3 font-medium text-white">
                Apply
            </button>
            <button class="rounded-md bg-white px-6 py-3 font-medium text-[#205E87]">
                Save
            </button>
        </div>
        <!-- Job Description -->
        <div class="">
            <div class="my-3">
                <p class="font-bold text-[#020202] text-xl">Job description</p>
                <div v-html="jobDescription || 'Job description preview will appear here.'"></div>
            </div>
        </div>
    </div>
</template>