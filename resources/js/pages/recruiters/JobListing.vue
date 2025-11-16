<script setup>
import Sidebar from '@/components/Sidebar.vue';
import { defineProps } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    joblisting: Object,
    required: true,
});

function changePage(url) {
    if (!url) return;
    Inertia.get(url);
}
</script>

<template>
    <Sidebar/>
    <div class="p-4 sm:ml-64">
        <div class="bg-neutral-primary-soft relative w-full rounded-2xl p-6">
            <div class="text-xl font-bold text-[[#205E87]]">
                Job Listing
            </div>
            <hr class="my-3">
            <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-lg border border-default">
                <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 p-4">
                    <label for="input-group-1" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="input-group-1" class="block w-150 max-w-150 ps-9 pe-3 py-2 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-lg focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" placeholder="Search">
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-body table-fixed">
                    <thead class="text-sm text-body bg-gray-50 border-b border-t border-default-medium">
                        <tr>
                            <th scope="col" class="w-5 p-4">
                                <div class="flex items-center">
                                    <input id="table-checkbox-45" type="checkbox" class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft">
                                    <label for="table-checkbox-45" class="sr-only">Table checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="w-1/3 px-6 py-3 font-medium">Job Title</th>
                            <th scope="col" class="w-1/4 px-6 py-3 font-medium">Date Posted</th>
                            <th scope="col" class="w-1/6 px-6 py-3 font-medium">Status</th>
                            <th scope="col" class="w-1/6 px-6 py-3 font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="job in joblisting.data" :key="job.id" class="bg-neutral-primary-soft border-b hover:bg-neutral-secondary-medium">
                            <td class="p-4">
                                <input type="checkbox" class="w-4 h-4 border rounded-xs bg-neutral-secondary-medium">
                            </td>
                            <td class="px-6 py-4">{{ job.title }}</td>
                            <td class="px-6 py-4">
                                {{ new Date(job.created).toLocaleDateString(undefined, { year: 'numeric', month: 'long', day: 'numeric' }) }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-600 mr-2"></div>
                                    {{ job.status.charAt(0).toUpperCase() + job.status.slice(1) }}
                                </div>
                            </td>
                            <td class="flex gap-2 px-6 py-4">
                                <button class="rounded-lg px-3 py-2 text-sm font-medium ring ring-[#205E87] text-[#205E87]">Update</button>
                                <button class="rounded-lg px-3 py-2 text-sm font-medium ring ring-[#FB3748] text-[#FB3748]">Archive</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav class="flex items-center justify-between p-4" aria-label="Table navigation">
                    <span class="text-sm text-body">
                        Showing {{ joblisting.from }}-{{ joblisting.to }} of {{ joblisting.total }}
                    </span>
                    <ul class="flex -space-x-px text-sm">
                        <li>
                            <button
                                @click="changePage(joblisting.prev_page_url)"
                                :disabled="!joblisting.prev_page_url"
                                class="flex items-center justify-center border px-3 h-9 rounded-l-lg hover:bg-gray-100 disabled:opacity-50"
                            >
                                Previous
                            </button>
                        </li>
                        <li>
                            <button
                                @click="changePage(joblisting.next_page_url)"
                                :disabled="!joblisting.next_page_url"
                                class="flex items-center justify-center border px-3 h-9 rounded-r-lg hover:bg-gray-100 disabled:opacity-50"
                            >
                                Next
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>