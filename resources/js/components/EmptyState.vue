<script setup>
const props = defineProps({
    title: { type: String, default: 'No Data Available' },
    message: { type: String, default: '' },
    image: { type: String, default: '/src/NoApplications.png' },
    buttonText: { type: String, default: 'Browse Internships' },
    buttonLink: { type: String, default: '/internships' }
});
</script>

<template>
    <div class="w-full flex flex-col items-center justify-center py-4 px-4 text-center">
        <img 
            :src="image"
            alt="Empty State"
            class="w-48 h-48 object-contain mb-6"
        />
        <h2 class="text-xl font-semibold text-gray-800 mb-2">
            {{ title }}
        </h2>
        <p class="text-gray-500 max-w-sm mb-6">
            {{ message }}
        </p>
        <a :href="buttonLink" class="px-6 py-3 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-all">
            {{ buttonText }}
        </a>
    </div>
</template>
