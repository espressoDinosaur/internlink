<script setup>
import Navbar from '@/components/Navbar.vue';
import RecruiterJobs from '@/components/RecruiterInfo/RecruiterOpportunities.vue';
import RecruiterLifeAndCulture from '@/components/RecruiterInfo/RecruiterLifeAndCulture.vue';
import RecruiterReviews from '@/components/RecruiterInfo/RecruiterReviews.vue';
import RecruiterSalaries from '@/components/RecruiterInfo/RecruiterSalaries.vue';
import { ref } from 'vue';

const tabs = [
    { id: 'about', label: 'About' },
    { id: 'culture', label: 'Life and Culture' },
    { id: 'jobs', label: 'Opportunities' },
    { id: 'salaries', label: 'Salaries' },
    { id: 'reviews', label: 'Reviews' },
];

const activeTab = ref('about');

const setTab = (tabId) => {
    activeTab.value = tabId;
};
</script>
<template>
    <Navbar />
    <div class="mx-auto mt-20 max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="mb-2 flex flex-col items-center gap-6 rounded-lg bg-white p-6 ring ring-gray-100 sm:flex-row sm:items-start sm:gap-8">
            <div class="flex-shrink-0">
                <img
                    src="/profile/zenitsu.jpg"
                    alt="Company Logo"
                    class="h-32 w-32 rounded-lg object-cover"
                />
            </div>
            <div class="flex-1">
                <h1 class="text-3xl font-bold text-gray-800">
                    Annex Digital, Inc.
                </h1>
                <p class="mt-1 text-gray-500">
                    Taguig, Metro Manila</p>
                <p class="mt-1 text-gray-500">
                    Technology / Software Development
                </p>
                <div class="mt-3 flex items-center gap-4">
                    <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800">
                        Verified
                    </span>
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-800">
                        Top Recruiter
                    </span>
                </div>
            </div>
            <div class="mt-4 flex flex-col gap-2 sm:mt-0">
                <button class="rounded-lg bg-blue-600 px-5 py-2 font-medium text-white transition hover:bg-blue-700">
                    Follow
                </button>
                <button class="rounded-lg bg-gray-100 px-5 py-2 font-medium text-gray-800 transition hover:bg-gray-200">
                    Contact
                </button>
            </div>
        </div>
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
                <div v-if="activeTab === 'about'">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                        Company overview
                    </h2>
                    <p class="leading-relaxed text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores neque laboriosam consectetur sunt accusantium nesciunt nisi illo ratione, cupiditate atque iure at ipsum, dolorem non quos corrupti eum inventore doloribus itaque, qui alias iste. Atque adipisci velit beatae ullam voluptate quae assumenda veritatis minus! Dolorem quos dicta cumque impedit quidem. Neque consequuntur consectetur doloribus minus at temporibus fugit, minima debitis et tenetur, fugiat molestias architecto hic amet possimus ducimus dolorum impedit maxime? Aperiam ea fugit ex deserunt? Hic, explicabo laudantium asperiores consequuntur vero qui ex. Adipisci non voluptate alias impedit, eius eum. Asperiores quaerat pariatur ipsam expedita dignissimos doloremque fugit consequuntur deleniti, obcaecati quod, quae excepturi accusantium reiciendis in? Adipisci dolores earum eius facere eos nesciunt magni, repellendus voluptates necessitatibus cupiditate, laudantium et totam, ab nihil. Dolores deleniti aliquid provident commodi, totam tenetur! Perspiciatis ipsam consequatur possimus eos reiciendis eveniet, porro atque? Alias, qui illo eum nobis doloremque consectetur quasi numquam dicta natus veniam eveniet dignissimos necessitatibus consequatur voluptate quo, minima commodi molestiae repudiandae repellat sequi cupiditate aspernatur, itaque neque omnis. Quas ea a, sint fugit cum modi maxime, cupiditate reiciendis blanditiis quo tempora dolorem numquam nesciunt quia ex repellat totam culpa illum sit quam. Rerum laudantium qui asperiores sapiente!
                    </p>
                </div>
                <div v-if="activeTab === 'culture'">
                    <RecruiterLifeAndCulture />
                </div>
                <div v-if="activeTab === 'jobs'">
                    <RecruiterJobs />
                </div>
                <div v-if="activeTab === 'salaries'">
                    <RecruiterSalaries />
                </div>
                <div v-if="activeTab === 'reviews'">
                    <RecruiterReviews />
                </div>
            </div>
        </div>
    </div>
</template>
