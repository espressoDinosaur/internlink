<script setup>
defineProps({
    education: Object,
});
</script>

<template>
    <div class="border-l-4 border-[#205E87] pl-3">
        <div class="flex justify-between">
            <div class="text-lg font-bold">
                {{ education.course_program }}
            </div>
            <div class="text-lg font-bold">
                {{ education.start_year }} - {{ education.end_year }}
            </div>
        </div>
        <ul class="list-none text-gray-500">
            <li>{{ education.institution }}</li>
            <li>{{ education.school_address }}</li>
        </ul>
    </div>
</template>