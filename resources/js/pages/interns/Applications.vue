<script setup>
import Navbar from '@/components/Navbar.vue';
import ApplicationCard from '@/components/applications/ApplicationCard.vue';
import EmptyState from '@/components/EmptyState.vue';
import { ref } from 'vue';

defineProps({
    savedApplications: Array,
    appliedApplications: Array,
    archivedApplications: Array,
});

const activeTab = ref('saved');

const setTab = (tab) => {
    activeTab.value = tab;
};
</script>

<template>
    <Navbar />
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20">
        <div class="text-4xl font-bold mb-2 pt-4">Activity</div>

        <!-- Tabs -->
        <div class="border-b border-gray-200">
            <nav class="flex gap-x-6" role="tablist">
                <button @click="setTab('saved')" class="py-4 px-2 flex flex-col items-center text-sm relative"
                    :class="activeTab === 'saved' ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600'">
                    <span class="text-xs py-0.5 mb-1">{{ savedApplications.length }}</span>
                    Saved
                    <span v-if="activeTab === 'saved'" class="absolute bottom-0 left-0 right-0 h-[3px] bg-blue-600 rounded-full"></span>
                </button>
                <button @click="setTab('applied')" class="py-4 px-2 flex flex-col items-center text-sm relative"
                    :class="activeTab === 'applied' ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600'">
                    <span class="text-xs py-0.5 mb-1">{{ appliedApplications.length }}</span>
                    Applied
                    <span v-if="activeTab === 'applied'" class="absolute bottom-0 left-0 right-0 h-[3px] bg-blue-600 rounded-full"></span>
                </button>
                <button @click="setTab('archived')" class="py-4 px-2 flex flex-col items-center text-sm relative"
                    :class="activeTab === 'archived' ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600'">
                    <span class="text-xs py-0.5 mb-1">{{ archivedApplications.length }}</span>
                    Archived
                    <span v-if="activeTab === 'archived'" class="absolute bottom-0 left-0 right-0 h-[3px] bg-blue-600 rounded-full"></span>
                </button>
            </nav>
        </div>

        <!-- Tab content -->
        <div class="mt-4">
            <!-- Saved -->
            <template v-if="activeTab === 'saved'">
                <ApplicationCard v-for="app in savedApplications" :key="app.id" :application="app" />
                <EmptyState v-if="savedApplications.length === 0"
                    title="No Saved Jobs Yet"
                    message="Looks like you haven’t saved any positions. Once you find an opportunity you like, tap the save icon to bookmark it here."
                    image="/src/NoApplications.png"
                    button-text="Browse Internships"
                    button-link="/internships"
                />
            </template>

            <!-- Applied -->
            <template v-if="activeTab === 'applied'">
                <ApplicationCard v-for="app in appliedApplications" :key="app.id" :application="app" />
                <EmptyState v-if="appliedApplications.length === 0"
                    title="No Applications Yet"
                    message="When you apply for positions, they'll appear in this section."
                    image="/src/NoApplications.png"
                    button-text="Browse Internships"
                    button-link="/internships"
                />
            </template>

            <!-- Archived -->
            <template v-if="activeTab === 'archived'">
                <ApplicationCard v-for="app in archivedApplications" :key="app.id" :application="app" />
                <EmptyState v-if="archivedApplications.length === 0"
                    title="No Archived Jobs"
                    message="You haven’t archived any jobs. You can archive saved or applied listings anytime."
                    image="/src/NoApplications.png"
                    button-text="Go Home"
                    button-link="/"
                />
            </template>
        </div>
    </div>
</template>