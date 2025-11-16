<script setup>
import 'bootstrap-icons/font/bootstrap-icons.css';

const sidebarItems = [
    { name: 'Dashboard', icon: 'bi bi-box', path: '/recruiter/dashboard' },
    { name: 'Create a job', icon: 'bi-plus-square', path: '/recruiter/createjob' },
    { name: 'Job Listing', icon: 'bi bi-briefcase', path: '/recruiter/joblisting' },
    { name: 'Candidates', icon: 'bi bi-people', path: '/recruiter/applicants' },
];

const getNavClass = (path) => {
    return window.location.pathname === path
        ? 'flex items-center px-3 py-2 rounded-lg bg-gray-100 text-fg-brand font-semibold'
        : 'flex items-center px-3 py-2 rounded-lg text-body hover:bg-gray-100 hover:text-fg-brand'
}
</script>
<template>
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">
            <div class="flex justify-center my-6">
                <img src="/src/internlink-text.png" alt="Sidebar Logo" class="h-12 w-auto object-cover">
            </div>
            <ul class="space-y-1 font-medium flex-grow">
                <li v-for="item in sidebarItems" :key="item.path">
                    <a :href="item.path" :class="getNavClass(item.path)">
                        <i :class="item.icon"></i>
                        <span class="ms-3 whitespace-nowrap">{{ item.name }}</span>
                    </a>
                </li>
            </ul>
            <ul class="space-y-1 font-medium">
                <li>
                    <a 
                        href="#"
                        class="flex items-center px-3 py-2 rounded-lg text-body hover:bg-gray-100 hover:text-fg-brand"
                    >
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span class="ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>