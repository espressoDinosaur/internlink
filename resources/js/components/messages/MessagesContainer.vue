<script setup>
import Message from './Message.vue';
</script>
<template>
    <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs h-full">
        <div class="mb-3 text-xl font-bold text-[[#205E87]]">
            Messages
        </div>
        <hr class="my-3">
        <form class="flex items-center max-w-sm mx-auto space-x-2 mb-3">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="bi bi-search"></i>
                </div>
                <input type="text" id="simple-search"
                    class="px-3 py-2.5 bg-neutral-secondary-medium border border-default-medium rounded-lg ps-9 text-heading text-sm focus:ring-brand focus:border-brand block w-full px-3 py-2.5 placeholder:text-body"
                    placeholder="Search a conversation..." required />
            </div>
        </form>
        <!-- Messages here -->
        <Message/>
    </div>
</template>