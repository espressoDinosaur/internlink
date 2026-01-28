<script setup></script>
<template>
    <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div>
            <h3 class="text-lg font-semibold text-gray-800">Receive job alerts via Email</h3>
            <p class="text-gray-500">We'll send you related jobs to help you find your next role.</p>
        </div>
        <label for="hs-basic-usage" class="relative inline-block w-11 h-6 cursor-pointer">
            <input type="checkbox" id="hs-basic-usage" class="peer sr-only">
            <span class="absolute inset-0 bg-gray-200 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-blue-600 dark:bg-neutral-700 dark:peer-checked:bg-blue-500 peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
            <span class="absolute top-1/2 start-0.5 -translate-y-1/2 size-5 bg-white rounded-full shadow-xs transition-transform duration-200 ease-in-out peer-checked:translate-x-full dark:bg-neutral-400 dark:peer-checked:bg-white"></span>
        </label>
    </div>
</template>