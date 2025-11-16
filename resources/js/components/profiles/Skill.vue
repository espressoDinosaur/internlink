<script setup>
defineProps({
    skill: Object
});
</script>

<template>
    <span class="text-fg-success-strong rounded-full bg-blue-300 px-3.5 py-1 font-medium flex items-center gap-1">
        {{ skill.skill_title }}
    </span>
</template>
