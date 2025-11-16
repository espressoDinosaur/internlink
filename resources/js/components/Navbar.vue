<script setup>
import 'bootstrap-icons/font/bootstrap-icons.css';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const user = page.props.auth.user;

const navItems = [
    { name: 'Home', path: '/' },
    { name: 'Internships', path: '/internships' },

    ...(user
        ? [
            { name: 'Messages', path: '/messages' },
            { name: 'Profile', path: '/userprofile' },
        ]
        : [])
];

const getNavClass = (path) => {
    return window.location.pathname === path
        ? 'rounded-md px-3 py-2 text-sm font-medium text-[#020202]'
        : 'rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:bg-gray/5 hover:text-gray';
};

const dropdownOpen = ref(false);
const toggleDropdown = () => {
    dropdownOpen.value = !dropdownOpen.value;
};

const logout = () => {
    Inertia.post('/logout');
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
                        <template v-if="user">
                            <button @click="toggleDropdown" class="flex items-center gap-2 focus:outline-none">
                                <img
                                    :src="user.avatar_url || '/profile/zenitsu.jpg'"
                                    alt="Profile"
                                    class="h-10 w-10 rounded-full object-cover border-2 border-white shadow"
                                />
                            </button>
                            <!-- DROPDOWN -->
                            <div v-show="dropdownOpen" class="origin-top-right absolute right-0 mt-2 w-60 rounded-md shadow-md bg-white ring-1 ring-gray-300 ring-opacity-5 focus:outline-none z-50 py-1 px-3">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                                        <i class="bi bi-file-earmark-text mr-2"></i>
                                        My Applications
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                                        <i class="bi bi-gear mr-2"></i>
                                        Settings
                                    </a>
                                    <hr class="my-3">
                                    <button @click="logout" class="w-full text-left block px-4 py-2 text-[#FB3748] hover:bg-gray-100 rounded-lg">
                                        <i class="bi bi-box-arrow-right mr-2"></i>
                                        Logout
                                    </button>
                                </div>
                            </div>
                        </template>

                        <!-- USER LOGGED OUT -->
                        <template v-else>
                            <div class="flex gap-4">
                                <a href="/login" class="rounded-md bg-[#205E87] px-3 py-2 text-sm font-medium text-white">
                                    Login
                                </a>
                                <a href="#" class="rounded-md ring ring-[#205E87] bg-white px-3 py-2 text-sm font-medium text-[#205E87]">
                                    Employer
                                </a>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
