<script setup>
defineProps({
    user: Object,
    internProfile: Object
});
</script>
<template>
    <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs">
        <div class="mb-3 text-xl font-bold text-[[#205E87]]">
            Personal information
        </div>
        <hr class="my-3">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="flex flex-col">
                <span class="text-sm text-gray-500">First Name</span>
                <span class="font-medium">{{ internProfile?.first_name ?? 'No data yet' }}</span>
            </div>
            <div class="flex flex-col">
                <span class="text-sm text-gray-500">Last Name</span>
                <span class="font-medium">{{ internProfile?.last_name ?? 'No data yet' }}</span>
            </div>
            <div class="flex flex-col">
                <span class="text-sm text-gray-500">Email</span>
                <span class="font-medium">{{ user?.email ?? 'No data yet' }}</span>
            </div>
            <div class="flex flex-col">
                <span class="text-sm text-gray-500">Phone</span>
                <span class="font-medium">{{ internProfile?.contact_no ?? 'No data yet' }}</span>
            </div>
            <div class="flex flex-col">
                <span class="text-sm text-gray-500">Address</span>
                <span class="font-medium">{{ internProfile?.address ?? 'No data yet' }}</span>
            </div>
            <div class="flex flex-col">
                <span class="text-sm text-gray-500">Expected Graduation</span>
                <span class="font-medium">
                    {{ internProfile?.expected_graduation
                        ? new Date(internProfile.expected_graduation).toLocaleString('en-US', { month: 'long', year: 'numeric' })
                        : 'No data yet'
                    }}
                </span>

            </div>
            <div class="flex flex-col md:col-span-2">
                <span class="text-sm text-gray-500">About Me</span>
                <p class="leading-relaxed font-medium text-justify">
                    {{ internProfile?.profile_desc ?? 'No data yet' }}
                </p>
            </div>
        </div>
    </div>
</template>
