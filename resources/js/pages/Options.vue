<script setup>
import Navbar from '@/components/Navbar.vue';
import JobAlertOptionsCard from '@/components/Options/JobAlertOptionsCard.vue';
import NotificationOptionsCard from '@/components/Options/NotificationOptionsCard.vue';
import AcccountOptionsCard from '@/components/Options/AcccountOptionsCard.vue';
import { ref } from 'vue';

const tabs = [
    { id: 'account', label: 'Account' },
    { id: 'notifications', label: 'Notifications' },
    { id: 'job-alerts', label: 'Job Alerts' },
];

const activeTab = ref('account');

const setTab = (tabId) => {
    activeTab.value = tabId;
};
</script>
<template>
    <Navbar />
    <div class="mx-auto mt-20 max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="text-4xl font-bold mb-2 pt-4">Options</div>
        <div class="bg-white">
            <div class="border-b border-gray-200 dark:border-neutral-700">
                <nav class="flex gap-x-4" role="tablist">
                    <button
                        v-for="tab in tabs"
                        :key="tab.id"
                        @click="setTab(tab.id)"
                        class="py-4 px-2 flex flex-col items-center text-sm relative border-b-2 border-transparent whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden"
                        :class="activeTab === tab.id ? 'text-blue-600 font-semibold' : ''">
                        {{ tab.label }}
                        <span v-if="activeTab === tab.id" class="absolute bottom-0 left-0 right-0 h-[3px] bg-blue-600 rounded-full"></span>
                    </button>
                </nav>
            </div>
            <div class="mt-3">
                <div v-if="activeTab === 'account'">
                    <div class="text-lg font-bold mb-4">Account</div>
                    <div class="grid gap-y-4">
                        <AcccountOptionsCard />
                    </div>
                </div>
                <div v-if="activeTab === 'notifications'">
                    <div class="text-lg font-bold mb-4">Notifications</div>
                    <NotificationOptionsCard />
                </div>
                <div v-if="activeTab === 'job-alerts'">
                    <div class="text-lg font-bold mb-4">Job Alerts</div>
                    <JobAlertOptionsCard />
                </div>
            </div>
        </div>
    </div>
</template>
