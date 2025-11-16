<script setup>
import Skill from './Skill.vue';

defineProps({
    skills: {
        type: Array,
        default: () => []
    }
});
</script>

<template>
    <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs">
        <div class="mb-3 text-xl font-bold text-[[#205E87]]">
            Skills
        </div>
        <hr class="my-3">

        <div class="flex flex-wrap gap-2">
            <Skill 
                v-for="skill in skills" 
                :key="skill.id" 
                :skill="skill" 
            />
        </div>

        <div v-if="skills.length === 0" class="text-gray-500 mt-2">
            No skills yet.
        </div>
    </div>
</template>
