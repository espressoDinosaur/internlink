<script setup>
import 'bootstrap-icons/font/bootstrap-icons.css';
</script>

<template>
    <div class="mx-auto mt-20 max-w-5xl px-2 sm:px-6 lg:px-8">
        <div class="mb-6 h-2.5 w-full rounded-full bg-gray-300">
            <div class="h-2.5 rounded-full bg-blue-600" style="width: 45%"></div>
        </div>
        <div class="bg-neutral-primary-soft border-default relative mb-4 w-full rounded-2xl border p-6 shadow-xs">
            <!-- Step 1 -->
            <div id="step-1">
                <div class="mb-3 text-xl font-bold text-[[#205E87]]">
                    Personal information
                </div>
                <div class="mb-6 grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="text-heading mb-2.5 block text-sm font-medium">First name</label>
                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="John"
                            required
                        />
                    </div>
                    <div>
                        <label for="last_name" class="text-heading mb-2.5 block text-sm font-medium">Last name</label>
                        <input
                            type="text"
                            id="last_name"
                            name="last_name"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="Doe"
                            required
                        />
                    </div>
                    <div>
                        <label for="phone" class="text-heading mb-2.5 block text-sm font-medium">Phone number</label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="123-456-7890"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                            required
                        />
                    </div>
                    <div>
                        <label for="website" class="text-heading mb-2.5 block text-sm font-medium">Website URL</label>
                        <input
                            type="url"
                            id="website"
                            name="website"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="flowbite.com"
                        />
                    </div>
                    <div>
                        <label for="birthdate" class="text-heading mb-2.5 block text-sm font-medium">Birthdate</label>
                        <input
                            type="date"
                            id="birthdate"
                            name="birthdate"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            required
                        />
                    </div>
                    <div>
                        <label for="address" class="text-heading mb-2.5 block text-sm font-medium">Address</label>
                        <input
                            type="text"
                            id="address"
                            name="address"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="123 Main St"
                            required
                        />
                    </div>
                </div>
                <button type="submit" class="mb-4 rounded-lg bg-blue-600 px-4 py-2.5 text-sm leading-5 font-medium text-white shadow-xs">
                    Next
                </button>
            </div>

            <!-- Step 2 -->
            <div id="step-2">
                <div class="mb-3 text-xl font-bold text-[[#205E87]]">
                    Educational background
                </div>
                <div class="mb-6 grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="course" class="text-heading mb-2.5 block text-sm font-medium">Course or Program</label>
                        <input
                            type="text"
                            id="course"
                            name="course"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="Bachelor of Science in CS"
                            required
                        />
                    </div>
                    <div>
                        <label for="institution" class="text-heading mb-2.5 block text-sm font-medium">Institution</label>
                        <input
                            type="text"
                            id="institution"
                            name="institution"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="University Name"
                            required
                        />
                    </div>
                    <div>
                        <label for="yearStarted" class="text-heading mb-2.5 block text-sm font-medium">Year Started</label>
                        <select id="yearStarted" name="yearStarted" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                            <option value="" selected>Please Select</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <!-- Add more years as needed -->
                        </select>
                    </div>
                    <div>
                        <label for="yearEnded" class="text-heading mb-2.5 block text-sm font-medium">
                            Year Ended
                            <span class="text-gray-500">(Optional)</span>
                        </label>
                        <select id="yearEnded" name="yearEnded" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                            <option value="" selected>Please Select</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="courseHighlight" class="text-heading block text-sm font-medium">
                        Course Highlight
                        <span class="text-gray-500">(Optional)</span>
                    </label>
                    <p class="mb-2.5 text-sm text-gray-500">
                        Add activities, projects, awards, or achievements during your study.
                    </p>
                    <textarea
                        id="courseHighlight"
                        name="courseHighlight"
                        rows="4"
                        class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border p-3.5 text-sm shadow-xs"
                        placeholder="Write your thoughts here..."
                    ></textarea>
                </div>
                <button type="submit" class="mb-4 rounded-lg bg-blue-600 px-4 py-2.5 text-sm leading-5 font-medium text-white shadow-xs">
                    Next
                </button>
            </div>

            <!-- Step 3 -->
            <div id="step-3">
                <div class="mb-3 text-xl font-bold text-[[#205E87]]">
                    Professional experience
                </div>
                <form>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="jobTitle" class="text-heading mb-2.5 block text-sm font-medium">Job Title</label>
                            <input
                                type="text"
                                id="jobTitle"
                                name="jobTitle"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                placeholder="Software Engineer"
                                required
                            />
                        </div>
                        <div>
                            <label for="companyName" class="text-heading mb-2.5 block text-sm font-medium">Company Name</label>
                            <input
                                type="text"
                                id="companyName"
                                name="companyName"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                placeholder="Tech Corp"
                                required
                            />
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="startMonth" class="text-heading mb-2.5 block text-sm font-medium">Started Month</label>
                                <select id="startMonth" name="startMonth" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                    <option value="" selected>Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div>
                                <label for="startYear" class="text-heading mb-2.5 block text-sm font-medium">Started Year</label>
                                <select id="startYear" name="startYear" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                    <option value="" selected>Year</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="endMonth" class="text-heading mb-2.5 block text-sm font-medium">Ended Month</label>
                                <select id="endMonth" name="endMonth" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                    <option value="" selected>Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div>
                                <label for="endYear" class="text-heading mb-2.5 block text-sm font-medium">Ended Year</label>
                                <select id="endYear" name="endYear" class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs">
                                    <option value="" selected>Year</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-2 mb-4 flex items-center">
                            <input
                                id="currentRole"
                                name="currentRole"
                                type="checkbox"
                                value="yes"
                                class="border-default-medium bg-neutral-secondary-medium focus:ring-blue-600-soft h-4 w-4 rounded-xs border focus:ring-2"
                            />
                            <label for="currentRole" class="text-heading ms-2 text-sm font-medium select-none">Still in role</label>
                        </div>
                    </div>

                    <!-- Role Description -->
                    <div class="mb-6">
                        <label for="roleDescription" class="text-heading block text-sm font-medium">
                            Role description
                            <span class="text-gray-500">(Recommended)</span>
                        </label>
                        <p class="mb-2.5 text-sm text-gray-500">
                            Summarise your responsibilities, skills, and achievements.
                        </p>
                        <textarea
                            id="roleDescription"
                            name="roleDescription"
                            rows="4"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border p-3.5 text-sm shadow-xs"
                            placeholder="Describe your role here..."
                        ></textarea>
                    </div>
                    <button type="submit" class="mb-4 rounded-lg bg-blue-600 px-4 py-2.5 text-sm leading-5 font-medium text-white shadow-xs">
                        Next
                    </button>
                </form>
            </div>

            <!-- Step 4 -->
            <div id="step-4">
                <div class="mb-3 text-xl font-bold text-[[#205E87]]">
                    Skills
                </div>
                <form>
                    <div class="">
                        <label for="roleDescription" class="text-heading block text-sm font-medium">Add a skill</label>
                        <p class="mb-2.5 text-sm text-gray-500">
                            Type a skill then enter to save.
                        </p>
                        <input
                            type="text"
                            id="skills"
                            name="skills"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-blue-600 focus:border-blue-600 placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="e.g., JavaScript, Photoshop"
                            required
                        />
                    </div>
                    <div class="my-6 flex flex-wrap gap-2">
                        <span class="text-fg-success-strong rounded-full bg-blue-300 px-3.5 py-1 text-sm font-medium">
                            Web Development
                            <i class="bi bi-x"></i>
                        </span>
                    </div>
                    <button type="submit" class="mb-4 rounded-lg bg-blue-600 px-4 py-2.5 text-sm leading-5 font-medium text-white shadow-xs">
                        Next
                    </button>
                </form>
            </div>

            <!-- Step 5 -->
            <div id="step-5">
                <div class="mb-3 text-xl font-bold text-[[#205E87]]">
                    Attachments
                </div>
                <div class="mb-6">
                    <label for="resume" class="text-heading block text-sm font-medium">Please upload your resume</label>
                    <p class="mb-2.5 text-sm text-gray-500">
                        Please select a PDF or DOC file.
                    </p>
                    <div class="flex w-full items-center justify-center">
                        <div class="bg-neutral-secondary-medium border-default-strong rounded-base flex h-64 w-full flex-col items-center justify-center border border-dashed">
                            <div class="text-body flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-arrow-up text-4xl font-semibold"></i>
                                <p class="mb-2 text-sm">
                                    Click the button below to upload
                                </p>
                                <p class="mb-4 text-xs">
                                    Max. File Size:
                                    <span class="font-semibold">30MB</span>
                                </p>
                                <!-- Upload Button -->
                                <button type="button" onclick="document.getElementById('resume').click()" class="bg-blue-600 rounded-lg hover:bg-blue-600-strong focus:ring-blue-600-medium rounded-base box-border inline-flex items-center border border-transparent px-3 py-2 text-sm leading-5 font-medium text-white shadow-xs focus:ring-4 focus:outline-none">
                                    <i class="bi bi-search mr-2"></i>
                                    Browse file
                                </button>
                            </div>
                        </div>
                        <!-- Hidden File Input -->
                        <input
                            id="resume"
                            name="resume"
                            type="file"
                            class="hidden"
                            accept=".pdf,.doc,.docx"
                        />
                    </div>
                </div>
                <button
                    type="submit"
                    class="mb-4 rounded-lg bg-blue-600 px-4 py-2.5 text-sm leading-5 font-medium text-white shadow-xs"
                >
                    Submit
                </button>
            </div>
        </div>
    </div>
</template>
