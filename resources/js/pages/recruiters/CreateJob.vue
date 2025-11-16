<script setup>
import InternshipPreview from '@/components/InternshipPreview.vue';
import Sidebar from '@/components/Sidebar.vue';
</script>

<template>
    <Sidebar/>
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-neutral-primary-soft relative mb-4 w-full rounded-2xl p-6">
                <div class="text-xl font-bold text-[[#205E87]]">
                    Create a job
                </div>
                <p class="text-gray-500 text-sm">[Description]</p>
                <hr class="my-3">
                <form action="">
                    <div class="mb-3">
                        <label for="first_name" class="text-heading mb-2.5 block text-sm font-medium">Job Title</label>
                        <input
                            type="text" id="job_title" name="job_title"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="eg. Web Developer" required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Category</label>
                        <select id="yearStarted" name="yearStarted" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                            <option value="" selected>Please Select</option>
                            <option value="Business & Management">Business & Management</option>
                            <option value="Creative Arts">Creative Arts</option>
                            <option value="Engineering & Mathematic">Engineering & Mathematic</option>
                            <option value="Hospitality Management">Hospitality Management</option>
                            <option value="Humanities & Social Sciences">Humanities & Social Sciences</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Legal Studies & Justice">Legal Studies & Justice</option>
                            <option value="Medical & Health Services">Medical & Health Services</option>
                            <option value="Property & Built Environment">Property & Built Environment</option>
                            <option value="Science and Research">Science and Research</option>
                            <option value="Teaching & Education">Teaching & Education</option>
                            <option value="Trades & Services">Trades & Services</option>
                        </select>
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div class="">
                            <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Job Type</label>
                            <select id="yearStarted" name="yearStarted" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                <option value="" selected>Please Select</option>
                                <option value="Full-time">Full-time Internship</option>
                                <option value="Part-time">Part-time Internship</option>
                                <option value="Contract">Contract</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Work arrangement</label>
                            <select id="yearStarted" name="yearStarted" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                <option value="" selected>Please Select</option>
                                <option value="Onsite">Onsite</option>
                                <option value="Hybrid">Hybrid</option>
                                <option value="Remote">Remote</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Is this paid internship?</label>
                            <div class="flex">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="paid_internship" class="">
                                    <label for="inline-radio" class="select-none ms-2 text-sm font-medium text-heading">Yes</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="" name="paid_internship" class="">
                                    <label for="inline-2-radio" class="select-none ms-2 text-sm font-medium text-heading">No</label>
                                </div>
                            </div>
                        </div>
                        <!-- Include this when salary is provided -->
                        <div class="">
                            <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Paid every</label>
                            <select id="yearStarted" name="yearStarted" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                <option value="" selected>Please Select</option>
                                <option value="Per day">Per day</option>
                                <option value="Per week">Per week</option>
                                <option value="Per month">Per month</option>
                                <option value="Twice a month">Twice a month</option>
                                <option value="After internship ends">After internship ends</option>
                            </select>
                        </div>
                    </div>
                    <!-- Include this when salary is provided -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="md-3">
                            <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Pay frequency</label>
                            <div class="flex">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="pay_frequency" class="">
                                    <label for="inline-radio" class="select-none ms-2 text-sm font-medium text-heading">Range</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="" name="pay_frequency" class="">
                                    <label for="inline-2-radio" class="select-none ms-2 text-sm font-medium text-heading">Exact</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="first_name" class="text-heading mb-2.5 block text-sm font-medium">Allowance</label>
                            <!-- If range is selected -->
                            <div class="flex items-center gap-2 ">
                                <input
                                    type="text" id="job_title" name="job_title"
                                    class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                    placeholder="From" required
                                />
                                to
                                <input
                                    type="text" id="job_title" name="job_title"
                                    class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                    placeholder="To" required
                                />
                            </div>
                            <!-- If exact is selected -->
                            <!-- <input
                                type="text" id="job_title" name="job_title"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                placeholder="eg. Web Developer" required
                            /> -->
                        </div>
                    </div>
                    <div class="md-3">
                        <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Job description</label>
                        <!-- This should be TinyMCE -->
                        <textarea
                            id="courseHighlight"
                            name="courseHighlight"
                            rows="4"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border p-3.5 text-sm shadow-xs"
                            placeholder="Write your thoughts here..."
                        ></textarea>
                    </div>
                </form>
            </div>
            <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs">
                <div class="text-xl font-bold text-[[#205E87]]">
                    Job Preview
                </div>
                <p class="text-gray-500 text-sm">[Description]</p>
                <hr class="my-3">
                <InternshipPreview/>
            </div>
        </div>
    </div>
</template>