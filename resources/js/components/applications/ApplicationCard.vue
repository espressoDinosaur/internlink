<script setup>
defineProps({
    application: Object,
});
</script>

<template>
    <div class="mb-4 flex items-center justify-between bg-white py-4 border-b-1">
        <!-- Image -->
        <div class="flex-shrink-0">
            <img :src="'/profile/default.png' ?? '/profile/default.png'"
                alt="Internship"
                class="h-16 w-16 rounded-lg object-cover"/>
        </div>

        <!-- Application Details -->
        <div class="flex-1 px-4">
            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 mb-2 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                {{ application.status.charAt(0).toUpperCase() + application.status.slice(1) }}
            </span>
            <h3 class="text-lg font-semibold text-gray-800">{{ application.internship.title }}</h3>
            <p>{{ application.internship.recruiter.company_name }}</p>
            <p>{{ application.internship.recruiter.location }}</p>
            <p class="mt-1 text-sm text-gray-500">
                Applied on {{ new Date(application.application_date).toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' }) }}
            </p>
            <div v-if="application.status === 'closed' || application.status === 'expired'" class="inline-flex items-center gap-x-1 mt-1 rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-600">
                <i class="bi bi-ban mr-2"></i>
                Job closed or expired
            </div>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-2">
            <button class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">
                View
            </button>
            <button class="rounded-full p-2 hover:bg-gray-100 transition">
                <i class="bi bi-three-dots-vertical text-gray-500"></i>
            </button>
        </div>
    </div>
</template>
