<x-layout>
<div class="relative bg-gradient-to-bl from-green-100 via-transparent dark:from-green-700 dark:via-transparent rounded">
                        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto rounded">
                            <!-- Grid -->
                            <div class="grid items-center md:grid-cols-2 gap-8 lg:gap-12">
                                
                            <div>
                                <!-- <img class="mb-5 size-20" src="https://upload.wikimedia.org/wikipedia/commons/5/55/LogoCSAV.png" alt="Avatar"> -->
                                <p class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-green-600 to-red-500 text-transparent dark:from-green-400 dark:to-red-400">
                                    Ticket Booking System
                                </p>

                                <!-- Title -->
                                <div class="mt-1 md:mb-12 max-w-2xl">
                                <h1 class="mb-4 font-semibold text-gray-800 text-4xl lg:text-5xl dark:text-neutral-200">
                                    Ticket Booking
                                </h1>
                                <p class="text-gray-600 dark:text-neutral-400">
                                    City Mall Victorias
                                </p>
                                </div>
                                <!-- End Title -->
                            </div>
                            <!-- End Col -->

                            <!-- Register -->
                            <div>
                                <!-- Form -->
                                <form action="/register" method="POST">
                                @csrf
                                <div class="lg:max-w-lg lg:mx-auto lg:me-0 ms-auto rounded">
                                    <!-- Card -->
                                    <div class="p-4 sm:p-7 flex flex-col bg-transparent rounded-2xl shadow-lg outline outline-green-500">
                                    <div class="text-center">
                                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Register Here!</h1>
                                        <p class="mt-2 text-sm text-gray-800 dark:text-white">
                                        Already have an account?
                                        <a class="text-red-400 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-red-400" href="#">
                                            Sign in here
                                        </a>
                                        </p>
                                    </div>

                                    <div class="mt-5">

                                        <!-- Grid -->
                                        <div class="grid grid-cols-2 gap-4">
                                            
                                        <!-- Username -->
                                        <div>
                                            <!-- Floating Input -->
                                            <div class="relative">
                                            <input type="text" name="username" id="hs-hero-signup-form-floating-input-first-username" class="outline outline-offset-2 outline-green-600 peer p-4 block w-full border-green-200 rounded-lg text-sm placeholder:text-transparent focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none bg-transparent dark:border-neutral-700 dark:text-neutral-100 dark:focus:ring-neutral-600
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="John">
                                            <label for="hs-hero-signup-form-floating-input-first-username" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-90
                                                peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                                peer-[:not(:placeholder-shown)]:scale-90
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Pick a username</label>
                                            </div>
                                            <!-- End Floating Input -->
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Email -->
                                        <div>
                                            <!-- Floating Input -->
                                            <div class="relative">
                                            <input type="text" name="email" id="hs-hero-signup-form-floating-input-email" class="outline outline-offset-2 outline-green-600 peer p-4 block w-full border-green-200 rounded-lg text-sm placeholder:text-transparent focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none bg-transparent dark:border-neutral-700 dark:text-neutral-100 dark:focus:ring-neutral-600
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="John">
                                            <label for="hs-hero-signup-form-floating-input-email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-90
                                                peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                                peer-[:not(:placeholder-shown)]:scale-90
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Email</label>
                                            </div>
                                            <!-- End Floating Input -->
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Password -->
                                        <div class="relative col-span-full">
                                            <!-- Floating Input -->
                                            <div class="relative">
                                            <input type="password" name="password" id="hs-hero-signup-form-floating-input-new-password" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none outline outline-green-500 dark:border-neutral-700 bg-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="********">
                                            <label for="hs-hero-signup-form-floating-input-new-password" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-90
                                                peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                                peer-[:not(:placeholder-shown)]:scale-90
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Password</label>
                                            </div>
                                            <!-- End Floating Input -->

                                            <div id="hs-strong-password-popover" class="hidden absolute z-10 w-full bg-gray-100 rounded-lg p-4 dark:bg-neutral-950">
                                            <div id="hs-strong-password-in-popover" data-hs-strong-password='{
                                                "target": "#hs-hero-signup-form-floating-input-new-password",
                                                "hints": "#hs-strong-password-popover",
                                                "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-teal-500 h-2 flex-auto rounded-full bg-green-500 opacity-50 mx-1",
                                                "mode": "popover"
                                                }' class="flex mt-2 -mx-1">
                                            </div>

                                            <h4 class="mt-3 text-sm font-semibold text-gray-800 dark:text-white">
                                                Your password must contain:
                                            </h4>

                                            <ul class="space-y-1 text-sm text-gray-500 dark:text-neutral-500">
                                                <li data-hs-strong-password-hints-rule-text="min-length" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Minimum number of characters is 6.
                                                </li>
                                                <li data-hs-strong-password-hints-rule-text="lowercase" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain lowercase.
                                                </li>
                                                <li data-hs-strong-password-hints-rule-text="uppercase" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain uppercase.
                                                </li>
                                                <li data-hs-strong-password-hints-rule-text="numbers" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain numbers.
                                                </li>
                                                <li data-hs-strong-password-hints-rule-text="special-characters" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain special characters.
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Confirm Password -->
                                        <div class="relative col-span-full">
                                            <!-- Floating Input -->
                                            <div class="relative">
                                            <input type="password" name="password_confirmation" id="hs-hero-signup-form-floating-input-confirm-password" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none outline outline-green-500 dark:border-neutral-700 bg-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
                                            focus:pt-6
                                            focus:pb-2
                                            [&:not(:placeholder-shown)]:pt-6
                                            [&:not(:placeholder-shown)]:pb-2
                                            autofill:pt-6
                                            autofill:pb-2" placeholder="********">
                                            <label for="hs-hero-signup-form-floating-input-confirm-password" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                peer-focus:scale-90
                                                peer-focus:translate-x-0.5
                                                peer-focus:-translate-y-1.5
                                                peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                                peer-[:not(:placeholder-shown)]:scale-90
                                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Confirm Password</label>
                                            </div>
                                            <!-- End Floating Input -->

                                            <div id="hs-strong-password-popover" class="hidden absolute z-10 w-full bg-gray-100 rounded-lg p-4 dark:bg-neutral-950">
                                            <div id="hs-strong-password-in-popover" data-hs-strong-password='{
                                                "target": "#hs-hero-signup-form-floating-input-new-password",
                                                "hints": "#hs-strong-password-popover",
                                                "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-teal-500 h-2 flex-auto rounded-full bg-green-500 opacity-50 mx-1",
                                                "mode": "popover"
                                                }' class="flex mt-2 -mx-1">
                                            </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->
                                        </div>
                                        <!-- End Grid -->

                                        <div class="mt-5">
                                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">Get started</button>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Col -->
                            </div>
                            <!-- End Grid -->
                        </div>
                        <!-- End Clients Section -->
                        </div>
                        <!-- End Hero -->
</x-layout>