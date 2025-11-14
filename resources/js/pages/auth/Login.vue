<script setup></script>
<template>
    <div class="mx-auto mt-20 max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4">
            <div class="">
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
                <form>
                    <div class="mb-2">
                        <label
                            for="email"
                            class="text-heading mb-2.5 block text-sm font-medium"
                            >Email address</label
                        >
                        <input
                            type="email"
                            id="email"
                            class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-brand focus:border-brand placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                            placeholder="john.doe@company.com"
                            required
                        />
                    </div>
                    <div class="mb-2 grid gap-4 md:grid-cols-2">
                        <div class="mb-2">
                            <label
                                for="password"
                                class="text-heading mb-2.5 block text-sm font-medium"
                                >Password</label
                            >
                            <input
                                type="password"
                                id="password"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-brand focus:border-brand placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                placeholder="•••••••••"
                                required
                            />
                        </div>
                        <div class="mb-2">
                            <label
                                for="confirm_password"
                                class="text-heading mb-2.5 block text-sm font-medium"
                                >Confirm password</label
                            >
                            <input
                                type="password"
                                id="confirm_password"
                                class="bg-neutral-secondary-medium border-default-medium text-heading focus:ring-brand focus:border-brand placeholder:text-body block w-full rounded-lg border px-3 py-2.5 text-sm shadow-xs"
                                placeholder="•••••••••"
                                required
                            />
                        </div>
                    </div>
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-blue-600 px-4 py-2.5 text-sm leading-5 font-medium text-white shadow-xs"
                    >
                        Submit
                    </button>
                </form>
                <div class="my-6 text-center text-xs text-gray-500">
                    OR CONTINUE WITH
                </div>
                <div class="mb-2 grid gap-4 md:grid-cols-2">
                    <!-- Google Login -->
                    <button type="submit" class="flex items-center justify-center gap-2 w-full rounded-lg px-4 py-2.5 text-sm font-medium text-black bg-white border border-gray-300 hover:bg-gray-100 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/>
                            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/>
                            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/>
                            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/>
                        </svg>
                        Google
                    </button>
                    <!-- LinkedIn Login -->
                    <button type="submit" class="flex items-center justify-center gap-2 w-full rounded-lg px-4 py-2.5 text-sm font-medium text-black bg-white border border-gray-300 hover:bg-gray-100 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                            <path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"/>
                            <path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36z"/>
                        </svg>
                        LinkedIn
                    </button>
                </div>
            </div>
            <div class="">
            </div>
        </div>
    </div>
</template>
