<script setup>
import { ref, computed, reactive } from 'vue';

// Define props
const props = defineProps({
    user: Object,
    internProfile: Object
});

// Destructure props for easier access
const user = props.user;
const internProfile = props.internProfile;

// Reactive object to track completion
const completionItems = reactive([
    { name: 'Email', completed: computed(() => !!user?.email) },
    { name: 'Profile Photo', completed: computed(() => !!user?.profile_photo_path) },
    { name: 'First Name', completed: computed(() => !!internProfile?.first_name) },
    { name: 'Last Name', completed: computed(() => !!internProfile?.last_name) },
    { name: 'Birthdate', completed: computed(() => !!internProfile?.birthdate) },
    { name: 'Contact No', completed: computed(() => !!internProfile?.contact_no) },
    { name: 'Address', completed: computed(() => !!internProfile?.address) },
    { name: 'Profile Description', completed: computed(() => !!internProfile?.profile_desc) },
    { name: 'Expected Graduation', completed: computed(() => !!internProfile?.expected_graduation) },
    { name: 'Title', completed: computed(() => !!internProfile?.title) },
    { name: 'Skills', completed: computed(() => internProfile?.skills?.length > 0) },
    { name: 'Experiences', completed: computed(() => internProfile?.experiences?.length > 0) },
    { name: 'Educations', completed: computed(() => internProfile?.education?.length > 0) },
    { name: 'File Attachments', completed: computed(() => internProfile?.attachments?.length > 0) },
]);

// Compute completion percentage
const completionPercentage = computed(() => {
    const total = completionItems.length;
    const completedCount = completionItems.filter(item => item.completed).length;
    return Math.round((completedCount / total) * 100);
});

// Dropdown toggle
const dropdownOpen = ref(false);
const toggleDropdown = () => {
    dropdownOpen.value = !dropdownOpen.value;
};
</script>

<template>
    <div class="relative bg-neutral-primary-soft w-full p-6 border border-default rounded-2xl shadow-xs mb-4">
        <div class="flex flex-col items-center">
            <img 
                class="w-32 h-32 mb-6 rounded-full ring-3 ring-[#205E87]" 
                :src="user?.profile_photo_path || '/profile/default.png'" 
                alt="Profile image"
            />
            <h5 class="mb-0.5 text-xl font-bold tracking-tight text-heading">
                {{ internProfile?.first_name ?? 'No data yet' }}
                {{ internProfile?.mid_name ?? '' }}
                {{ internProfile?.last_name ?? 'No data yet' }}
            </h5>
            <span class="text-sm text-body">
                {{ internProfile?.title ?? 'No data yet' }}
            </span>
        </div>
        <hr class="my-3" />
        <div class="relative" @click="toggleDropdown">
            <div class="flex justify-between items-center mb-1 cursor-pointer">
                <span class="text-sm font-medium text-body">Profile Completion</span>
                <div class="flex items-center gap-2">
                    <span class="text-sm font-medium text-body">{{ completionPercentage }}%</span>
                    <i :class="dropdownOpen ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="text-gray-500"></i>
                </div>
            </div>

            <div class="w-full bg-gray-300 rounded-full h-2">
                <div 
                    class="bg-[#205E87] h-2 rounded-full" 
                    :style="{ width: completionPercentage + '%' }"
                ></div>
            </div>

            <!-- Dropdown -->
            <div v-if="dropdownOpen" class="absolute z-50 mt-2 w-full bg-white border border-gray-200 rounded-lg shadow-lg p-4">
                <ul class="space-y-2">
                    <li v-for="item in completionItems" :key="item.name" class="flex justify-between items-center">
                        <span>{{ item.name }}</span>
                        <span>
                            <i v-if="item.completed" class="bi bi-check-circle-fill text-green-500"></i>
                            <i v-else class="bi bi-x-circle-fill text-red-500"></i>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
