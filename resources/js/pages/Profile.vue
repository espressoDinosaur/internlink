<script setup>
import Navbar from '@/components/Navbar.vue';
import AttachmentCard from '@/components/profiles/AttachmentCard.vue';
import EducationCard from '@/components/profiles/EducationCard.vue';
import ExperienceCard from '@/components/profiles/ExperienceCard.vue';
import PersonalInformationCard from '@/components/profiles/PersonalInformationCard.vue';
import ProfileQuickLinks from '@/components/profiles/ProfileQuickLinks.vue';
import UserProfileCard from '@/components/profiles/UserProfileCard.vue';
</script>

<template>
    <Navbar />
    <div class="mx-auto mt-20 max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-4">
            <div class="">
                <UserProfileCard/>
                <ProfileQuickLinks/>
            </div>
            <div class="col-span-2">
                <PersonalInformationCard/>
                <EducationCard />
                <ExperienceCard />
                <AttachmentCard />
            </div>
        </div>
    </div>
</template>
