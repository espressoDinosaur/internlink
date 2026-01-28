<script setup>
import Salary from './include/Salary.vue';

</script>
<template>
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">
        Salaries at Annex Digital, Inc.
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <Salary />
    </div>
</template>