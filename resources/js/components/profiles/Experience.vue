<script setup>
defineProps({
    experience: Object
});
</script>

<template>
    <div class="border-l-4 border-[#205E87] pl-3">
        <div class="flex justify-between">
            <div class="text-lg font-bold">
                {{ experience.exp_title }}
            </div>
            <div class="text-lg font-bold">
                {{ experience.start_month }} {{ experience.start_year }} - 
                {{ experience.end_month }} {{ experience.end_year }}
            </div>
        </div>
        <ul class="list-none text-gray-500">
            <li>{{ experience.exp_company }}</li>
            <li>{{ experience.exp_address }}</li>
            <hr class="my-2">
            <li class="">
                <p class="font-medium">Role Description:</p>
                <p>{{ experience.role_description }}</p>
            </li>
        </ul>
    </div>
</template>