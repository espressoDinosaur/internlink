<script setup>
import 'bootstrap-icons/font/bootstrap-icons.css';

const navItems = [
    { name: 'Home', path: '/' },
    { name: 'Messages', path: '/messages' },
    { name: 'Profile', path: '/userprofile' },
];

const getNavClass = (path) => {
    return window.location.pathname === path
        ? 'rounded-md px-3 py-2 text-sm font-medium text-[#020202]'
        : 'rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:bg-gray/5 hover:text-gray';
};
</script>

<template>
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start gap-4">
                    <div class="flex shrink-0 items-center">
                        <a href="/">
                            <img src="src/internlink-text.png" alt="Logo" class="h-10 w-auto" />
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:block flex flex-1">
                        <div class="flex space-x-4">
                            <a
                                v-for="item in navItems"
                                :key="item.name"
                                :href="item.path"
                                :class="getNavClass(item.path)"
                            >
                                {{ item.name }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="relative ml-3">
                        <a href="/login">
                            <div class="rounded-md bg-[#205E87] px-3 py-2 text-sm font-medium text-white">
                                Login
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
