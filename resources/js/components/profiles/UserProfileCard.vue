<script setup>
defineProps({
    user: Object,
    internProfile: Object
});
</script>
<template>
    <div class="relative bg-neutral-primary-soft w-full p-6 border border-default rounded-2xl shadow-xs mb-4">
        <div class="flex flex-col items-center">
            <img class="w-32 h-32 mb-6 rounded-full ring-3 ring-[#205E87] p-2" src="profile/zenitsu.jpg" alt="Bonnie image"/>
            <h5 class="mb-0.5 text-xl font-bold tracking-tight text-heading">
                {{ internProfile?.first_name ?? 'No data yet' }}
                {{ internProfile?.mid_name ?? 'No data yet' }}
                {{ internProfile?.last_name ?? 'No data yet' }}
            </h5>
            <span class="text-sm text-body">
                {{ internProfile?.title ?? 'No data yet' }}
            </span>
        </div>
        <hr class="my-3">
        <div class=""> 
            <div class="flex justify-between mb-1">
                <span class="text-sm font-medium text-body">
                    Profile Completion
                </span>
                <span class="text-sm font-medium text-body">45%</span>
            </div>
                <div class="w-full bg-gray-300 rounded-full h-2">
                <div class="bg-[#205E87] h-2 rounded-full" style="width: 45%"></div>
            </div>
        </div>
    </div>
</template>