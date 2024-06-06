<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import ApplicationLogoVue from '@/Components/ApplicationLogo.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

const menus = [
    { "id": "Home", "url": "#" },
    { "id": "FAQs", "url": "/unavailable" },
    { "id": "Contact", "url": "/unavailable" },
]
const menuOpen = ref(false);

const toggleMenu = () => {
    menuOpen.value = !menuOpen.value;
};
</script>



<template>
    <div class="w-full min-h-screen bg-white">
        <header class="bg-[#FCF8F1] bg-opacity-30">
            <div class="px-4 mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 lg:h-20">
                    <div class="flex-shrink-0">
                        <a href="#" title="" class="flex">
                            <span><ApplicationLogoVue class="h-32 absolute top-1" /></span>
                        </a>
                    </div>

                    <button @click="toggleMenu" type="button"
                        class="inline-flex p-2 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                        <svg v-if="!menuOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16">
                            </path>
                        </svg>
                        <svg v-else class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <!-- <div v-if="menuOpen" class="lg:flex lg:items-center lg:justify-center lg:space-x-10">
                        <a href="#" title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80">Features</a>
                        <a href="#" title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80">Solutions</a>
                        <a href="#" title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80">Resources</a>
                        <a href="#" title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80">Pricing</a>
                    </div> -->

                    <a :href="route('register')"  title=""
                        class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:bg-yellow-300 hover:text-black focus:text-black focus:bg-yellow-300 font-semibold text-white bg-black rounded-full"
                        role="button">
                        Sign up
                    </a>
                </div>
            </div>
        </header>

        <section class="bg-[#FCF8F1] bg-opacity-30 py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <p class="text-base font-semibold tracking-wider text-blue-800 uppercase">Whats on your mind ?</p>
                        <h1 class="mt-4 text-4xl font-bold text-black lg:mt-8 sm:text-6xl xl:text-8xl">Connect with millions with Echo</h1>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">Echo out your thoughts on Echo
                        </p>

                        <a :href="route('register')" title=""
                            class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400"
                            role="button">
                            Sign up
                            <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                        <div>
                            <p v-if="$page.props.auth.user" class="pt-4 lg:text-lg md:text-sm sm:text-sm text-cyan-700 font-bold tracking-tighter leading-tight whitespace-nowrap">
                            YOU'RE LOGGED IN, HOPE YOU'RE HAVING A GREAT TIME
                            </p>
                            <p v-else class="mt-5 text-gray-600">
                            Already joined us?
                            <a :href="route('login')" title="Log in" aria-label="Log in" class="text-black transition-all duration-200 hover:underline">
                                Log in
                            </a>
                            </p>
                        </div>
                    </div>

                    <div>
                        <img class="w-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/1/hero-img.png"
                            alt="Hero Image" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>


<style scoped>
/* Add any scoped styles here */
</style>


<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
