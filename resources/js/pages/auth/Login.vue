<script setup>
import axios from "axios";
import { ref } from "vue";

const email = ref("");
const password = ref("");
const errors = ref("");

const submitForm = async () => {
    errors.value = "";

    try {
        const response = await axios.post("/auth/check", {
            email: email.value,
            password: password.value,
        });

        switch (response.data.status) {
            case "EXISTING_USER":
                window.location.href = "/";
                break;

            case "NEW_USER":
                window.location.href = `/interns/registration?email=${encodeURIComponent(email.value)}`;
                break;

            case "INVALID_CREDENTIALS":
                errors.value = "Incorrect password. Try again — you’ve got this.";
                break;

            default:
                errors.value = "Unexpected response. Try again.";
        }
    } catch (err) {
        errors.value = "Server error. Please try again shortly.";
    }
};
</script>

<template>
    <div class="mx-auto mt-20 max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <img
                    src="src/internlink-text.png"
                    alt="Logo"
                    class="mb-10 h-10 w-auto"
                />

                <div class="text-4xl font-bold text-[#205E87]">
                    Login to your account
                </div>
                <p class="mb-4 text-gray-500">
                    Please enter your login details to access your account.
                </p>

                <form @submit.prevent="submitForm">
                    <div class="mb-2">
                        <label class="block text-sm font-medium mb-2.5">Email</label>
                        <input
                            v-model="email"
                            type="email"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-brand focus:border-brand block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="john.doe@company.com"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2.5">Password</label>
                        <input
                            v-model="password"
                            type="password"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-brand focus:border-brand block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="•••••••••"
                            required
                        />
                    </div>

                    <div v-if="errors" class="mb-4 text-red-600 text-sm">
                        {{ errors }}
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white shadow-xs"
                    >
                        Submit
                    </button>
                </form>

                <div class="my-6 text-center text-xs text-gray-500">
                    OR CONTINUE WITH
                </div>

                <div class="grid gap-4 md:grid-cols-2">
                    <!-- Google -->
                    <button
                        class="flex items-center justify-center gap-2 w-full rounded-lg px-4 py-2.5 text-sm font-medium text-black bg-white border border-gray-300 hover:bg-gray-100 shadow"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                            <path
                                fill="#FFC107"
                                d="M43.611 20.083H42V20H24v8..."
                            />
                        </svg>
                        Google
                    </button>

                    <!-- LinkedIn -->
                    <button
                        class="flex items-center justify-center gap-2 w-full rounded-lg px-4 py-2.5 text-sm font-medium text-black bg-white border border-gray-300 hover:bg-gray-100 shadow"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                            <path fill="#0288D1" d="M42 37c0 2.762-2.238 5-5 5H11..." />
                        </svg>
                        LinkedIn
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
