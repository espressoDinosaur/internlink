<script setup>
import MessagePanel from '@/components/messages/MessagePanel.vue';
import MessagesContainer from '@/components/messages/MessagesContainer.vue';
import Navbar from '@/components/Navbar.vue';
</script>
<template>
    <Navbar />
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20">
        <div class="grid grid-cols-3 gap-4">
            <div class="h-[640px]">
                <MessagesContainer/>
            </div>
            <div class="col-span-2 h-[640px]">
                <MessagePanel/>
            </div>
        </div>
    </div>
</template>
