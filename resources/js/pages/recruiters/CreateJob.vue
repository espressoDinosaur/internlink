<script setup>
import { ref } from 'vue';
import Editor from '@tinymce/tinymce-vue';
import InternshipPreview from '@/components/InternshipPreview.vue';
import Sidebar from '@/components/Sidebar.vue';

const category = ref('');
const title = ref('');
const jobType = ref('');
const workArrangement = ref('');
const paidInternship = ref('');
const payFrom = ref('');
const payTo = ref('');
const payType = ref('');
const jobDescription = ref('');
const skillsInput = ref('');
const skills = ref([]);

function addSkill(event) {
    if (event.key === 'Enter' && skillsInput.value.trim() !== '') {
        skills.value.push(skillsInput.value.trim());
        skillsInput.value = '';
        event.preventDefault();
    }
}

function removeSkill(index) {
    skills.value.splice(index, 1);
}
</script>

<template>
    <Sidebar/>
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-neutral-primary-soft relative mb-4 w-full rounded-2xl p-6">
                <div class="text-xl font-bold text-[[#205E87]]">
                    Create a job
                </div>
                <p class="text-gray-500 text-sm">Provide the required details to advance this opportunity.</p>
                <hr class="my-3">
                <form action="">
                    <div class="">
                        <div class="mb-3">
                            <label for="" class="text-heading mb-2 block text-sm font-medium">Category</label>
                            <select id="" name="" v-model="category"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                <option value="" selected>Please select category</option>
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
                        <div class="mb-3">
                            <label for="" class="text-heading mb-2 block text-sm font-medium">Title</label>
                            <input type="text" id="" name="" v-model="title"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                placeholder="Enter job title" required
                            />
                        </div>
                        <div class="mb-3 grid grid-cols-2 gap-4">
                            <div class="mb-3">
                                <label for="" class="text-heading mb-2 block text-sm font-medium">Job Type</label>
                                <select id="" name="" v-model="jobType"
                                    class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                    <option value="" selected>Please select job type</option>
                                    <option value="Full-time">Full-time Internship</option>
                                    <option value="Part-time">Part-time Internship</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-heading mb-2 block text-sm font-medium">Work Arrangement</label>
                                <select id="" name="" v-model="workArrangement"
                                    class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                    <option value="" selected>Please select work arrangement</option>
                                    <option value="Onsite">Onsite</option>
                                    <option value="Hybrid">Hybrid</option>
                                    <option value="Remote">Remote</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="">
                        <div class="mb-3">
                            <label class="text-heading mb-2 block text-sm font-medium">Is this paid internship?</label>
                            <div class="grid sm:grid-cols-2 gap-2">
                                <label for="paid_yes" class="flex items-center p-3 w-full bg-white border border-gray-300 rounded-lg cursor-pointer hover:border-blue-500">
                                    <input id="paid_yes" type="radio" name="paid_internship" value="yes" v-model="paidInternship"
                                        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <span class="ml-3 text-sm text-gray-700">Yes</span>
                                </label>
                                <label for="paid_no" class="flex items-center p-3 w-full bg-white border border-gray-300 rounded-lg cursor-pointer hover:border-blue-500">
                                    <input id="paid_no" type="radio" name="paid_internship" value="no" v-model="paidInternship"
                                        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <span class="ml-3 text-sm text-gray-700">No</span>
                                </label>
                            </div>
                        </div>
                        <!-- Show when the internship is paid -->
                        <div v-if="paidInternship === 'yes'" class="mb-3">
                            <label class="text-heading mb-2 block text-sm font-medium">Pay</label>
                            <div class="flex items-center gap-3">
                                <input type="text" id="from" name="from" v-model="payFrom"
                                    class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs" placeholder="From" required>
                                <span class="text-sm text-gray-600">to</span>
                                <input type="text" id="to" name="to" v-model="payTo"
                                    class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs" placeholder="To" required>
                                <select id="type" name="type" v-model="payType"
                                    class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                    <option value="" selected>Please select</option>
                                    <option value="Per day">Per day</option>
                                    <option value="Per week">Per week</option>
                                    <option value="Per month">Per month</option>
                                    <option value="Twice a month">Twice a month</option>
                                    <option value="After internship ends">After internship ends</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="">
                        <div class="mb-3">
                            <label for="" class="text-heading mb-2 block text-sm font-medium">Required skills</label>
                            <input type="text" id="" name="" v-model="skillsInput" @keydown="addSkill"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                placeholder="Type skill and enter" required
                            />
                        </div>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span v-for="(skill, index) in skills" :key="index"
                                class="flex items-center gap-2 bg-gray-300 px-3 py-1 rounded-full text-sm font-medium">
                                {{ skill }}
                                <button type="button" @click="removeSkill(index)" class="ml-1 text-red-500 hover:text-red-700">&times;</button>
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="text-heading mb-2 block text-sm font-medium">Job description</label>
                            <!-- Make this tinyMCE -->
                            <Editor
                                v-model="jobDescription"
                                api-key="tzq0ghupjev61oov45yqw2p0owuw0v845n3srgzd5ggrfupq"
                                :init="{
                                    height: 300,
                                    menubar: false,
                                    plugins: 'lists link image table code help wordcount',
                                    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | code',
                                    placeholder: 'Describe the role, responsibilities, and expectations...'
                                }"
                            />
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="my-6 flex justify-between gap-2">
                        <a href="#" class="rounded-md bg-white px-6 py-3 font-medium text-[#FB3748] ring ring-[#FB3748]">
                            Cancel
                        </a>
                        <a href="#" class="rounded-md bg-[#205E87] px-6 py-3 font-medium text-white">
                            Create job
                        </a>
                    </div>
                </form>
            </div>
            <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs">
                <div class="text-xl font-bold text-[[#205E87]]">
                    Job Preview
                </div>
                <p class="text-gray-500 text-sm">
                    This is the preview of opportunities when viewed by students.
                </p>
                <hr class="my-3">
                <InternshipPreview
                    :title="title"
                    :category="category"
                    :job-type="jobType"
                    :work-arrangement="workArrangement"
                    :paid-internship="paidInternship"
                    :pay-from="payFrom"
                    :pay-to="payTo"
                    :pay-type="payType"
                    :skills="skills"
                    :job-description="jobDescription"
                />
            </div>
        </div>
    </div>
</template>