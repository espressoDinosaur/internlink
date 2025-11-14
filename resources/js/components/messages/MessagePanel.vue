<script setup>
import ReceiverDialog from './ReceiverDialog.vue';
import SenderDialog from './SenderDialog.vue';

</script>
<template>
    <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs h-full">
        <div class="py-2 flex items-start gap-3">
            <img  src="profile/tanjiro.png" alt="Profile" class="h-12 w-12 rounded-full object-cover"/>
            <div class="flex-1">
                <div class="flex justify-between items-center">
                    <div class="font-semibold">Kamado Tanjiro</div>
                    <div class="">
                        <i class="bi bi-three-dots-vertical"></i>
                    </div>
                </div>
                <div class="text-sm text-gray-500 truncate">
                    <!-- limit this to six words -->
                    Recruiter at Demon Slayer Corp.
                </div>
            </div>
        </div>
        <hr class="my-2">
        <div class="flex-1 overflow-y-auto space-y-3">
            <SenderDialog />
            <ReceiverDialog />
        </div>
        <div class="absolute bottom-6 left-6 right-6 flex items-center gap-3">
            <input 
                type="text" 
                placeholder="Type a message..." 
                class="flex-1 border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            <button class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">
                Send
            </button>
        </div>
    </div>
</template>