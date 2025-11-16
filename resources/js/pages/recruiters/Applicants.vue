<script setup>
import Sidebar from '@/components/Sidebar.vue';
</script>

<template>
    <Sidebar/>
    <div class="p-4 sm:ml-64">
        <div class="bg-neutral-primary-soft relative mb-4 w-full rounded-2xl p-6">
            <div class="text-xl font-bold text-[[#205E87]]">
                Candidates
            </div>
            <p class="text-gray-500 text-sm">[Description]</p>
            <hr class="my-3">
            <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
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
                            <th scope="col" class="w-1/3 px-6 py-3 font-medium">Applicant</th>
                            <th scope="col" class="w-1/4 px-6 py-3 font-medium">Position applied to</th>
                            <th scope="col" class="w-1/6 px-6 py-3 font-medium">Status</th>
                            <th scope="col" class="w-1/6 px-6 py-3 font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">
                            <td class="p-4">
                                <div class="flex items-center">
                                    <input id="table-checkbox-46" type="checkbox" class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft">
                                    <label for="table-checkbox-46" class="sr-only">Table checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-heading whitespace-nowrap">
                                <img class="w-10 h-10 rounded-full" src="/profile/zenitsu.jpg" alt="Richard Allen">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Richard Allen Gabor</div>
                                    <div class="font-normal text-body">gabor.richardallen@gmail.com</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4">React Developer</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-600 me-2"></div> Online
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="rounded-lg px-3 py-2 text-sm font-medium ring ring-[#205E87] text-[#205E87]">
                                    View Application
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between p-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-body mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-heading">1-10</span> of <span class="font-semibold text-heading">1000</span></span>
                    <ul class="flex -space-x-px text-sm">
                        <li>
                            <a href="#" class="flex items-center justify-center text-body box-border border border-default-medium hover:text-heading font-medium rounded-l-lg text-sm px-3 h-9 focus:outline-none">Previous</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-body box-border border border-default-medium hover:text-heading font-medium text-sm w-9 h-9 focus:outline-none">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-body box-border border border-default-medium hover:text-heading font-medium rounded-r-lg text-sm px-3 h-9 focus:outline-none">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>