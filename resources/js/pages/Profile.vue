<script setup>
import Navbar from '@/components/Navbar.vue';
import UserProfileCard from '@/components/UserProfileCard.vue';
</script>

<template>
    <Navbar />
    <div class="mx-auto mt-20 max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-4">
            <div class="">
                <UserProfileCard/>
            </div>
            <div class="col-span-2"></div>
        </div>
    </div>
</template>
