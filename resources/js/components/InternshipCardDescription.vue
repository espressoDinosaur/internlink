<script setup>
import InternshipCard from './InternshipCard.vue';
</script>
<template>
    <div class="bg-neutral-primary-soft block p-5 rounded-2xl shadow-xs mb-3">
        <!-- Top Menu -->
        <div class="">
            <div class="grid grid-cols-2 items-center">
                <div class="">
                    <img src="src/internlink-text.png" alt="Logo" class="h-15 w-auto" />
                </div>
                <div class="text-gray-600 flex justify-end gap-2">
                    <i class="bi bi-three-dots-vertical"></i>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="font-bold text-4xl text-[#205E87] mt-4">
            Software Developer
        </div>
        <div class="text-gray-600 text-lg">
            Central Luzon State University
        </div>
        <div class="my-2">
            <p class="my-1">
                <i class="bi bi-geo-alt mr-2"></i>
                Guimba, Nueva Ecija</p>
            <p class="my-1">
                <i class="bi bi-buildings mr-2"></i>
                Information Technology
            </p>
            <p class="my-1">
                <i class="bi bi-cash-stack mr-2"></i>
                Did not disclose
            </p>
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
            <p class="font-bold text-[#020202] text-xl">
                Job description
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima officiis soluta enim veniam id fugiat recusandae eaque odio eius eum!</p>
        </div>
    </div>
    <div class="bg-neutral-primary-soft block p-5 border border-default rounded-2xl shadow-xs mb-3">
        <!-- Company Description -->
        <div class="">
            <div class="my-2">
                <img src="src/internlink-text.png" alt="Logo" class="h-12 w-auto" />
            </div>
            <div class="font-bold text-2xl text-black-300">
                Software Developer
            </div>
            <div class="my-2">
                <p class="my-1">
                    <i class="bi bi-buildings mr-2"></i>
                    Information Technology
                </p>
                <p class="my-1">
                    <i class="bi bi-people mr-2"></i>
                    5,001-10,000 employees
                </p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis iure sunt excepturi non nihil veniam id veritatis fugit delectus reprehenderit?</p>
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
                <InternshipCard />
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