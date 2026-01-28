<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    internship: Object
});
</script>
<template>
    <div class="bg-neutral-primary-soft block p-5 rounded-2xl mb-3">
        <div class="grid grid-cols-2 items-center">
            <div>
                <img src="src/internlink-text.png" alt="Logo" class="h-15 w-auto" />
            </div>
            <div class="text-gray-600 flex justify-end gap-2">
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </div>
        <div class="font-bold text-4xl text-[#205E87] mt-4">
            {{ internship.title }}
        </div>
        <div class="text-gray-600 text-lg">
            {{ internship.recruiter?.company_name }}
        </div>
        <div class="my-2">
            <p class="my-1"><i class="bi bi-geo-alt mr-2"></i>{{ internship.recruiter?.location }}</p>
            <p class="my-1"><i class="bi bi-buildings mr-2"></i>{{ internship.job_category }}</p>
            <p class="my-1"><i class="bi bi-cash-stack mr-2"></i>
                {{ internship.salary ? `₱ ${Number(internship.salary).toLocaleString('en-PH')}` : 'Not disclosed' }}
            </p>
        </div>
        <div class="text-gray-600 mb-6">
            Posted on {{ new Date(internship.created_at).toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' }) }}
        </div>
        <div class="my-6 flex gap-2">
            <button class="rounded-md bg-[#205E87] px-6 py-3 font-medium text-white">Apply</button>
            <button class="rounded-md bg-white px-6 py-3 font-medium text-[#205E87]">Save</button>
        </div>
        <div>
            <p class="font-bold text-[#020202] text-xl">Job description</p>
            <p>{{ internship.description }}</p>
        </div>
    </div>
    <div class="bg-neutral-primary-soft block p-5 border border-default rounded-2xl shadow-xs mb-3">
        <div class="">
            <div class="my-2">
                <img src="src/internlink-text.png" alt="Logo" class="h-12 w-auto" />
            </div>
            <div class="font-bold text-2xl text-black-300 mt-4">
                {{ internship.recruiter.company_name }}
            </div>
            <div class="my-2">
                <p class="my-1">
                    <i class="bi bi-buildings mr-2"></i>
                    {{ internship.recruiter.industry }}
                </p>
                <p class="my-1">
                    <i class="bi bi-people mr-2"></i>
                    {{ internship.recruiter.size }} employees
                </p>
            </div>
            <div>
                <p>
                    {{ internship.recruiter.about }}
                </p>
            </div>
            <button class="rounded-md bg-white ring ring-[#205E87] px-6 py-3 font-medium text-[#205E87] mt-3">
                More about this company
            </button>
        </div>
    </div>
    <div>
        <div class="font-bold text-2xl text-black-300 mb-3">
            Featured jobs
        </div>
        <div class="flex gap-4 overflow-x-auto pb-2 scrollbar-hide">
            <div v-for="n in 3" :key="n" class="flex-shrink-0 w-80">
                Static
            </div>
        </div>
    </div>
    <div class="mb-6">
        <hr>
        <button class="rounded-md bg-white ring ring-red-600 px-6 py-3 font-medium text-red-600 my-6">
            Report this job
        </button>
    </div>
</template>