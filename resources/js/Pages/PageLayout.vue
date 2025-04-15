<script setup>
import { Head, Link } from '@inertiajs/vue3';


</script>

<template>

    <nav class="flex justify-between items-center p-4 bg-green-100 shadow">
        <a href="/" class="flex items-center">
            <img src="/images/lx_logo.png" alt="Logo" class="w-[70px] h=[70px]">
            <div class="text-xl font-bold">
                Lentrix Extreme
            </div>
        </a>
        <div class="main-nav">
            <Link href="/">Home</Link>
            <Link href="/investors">Investors</Link>
            <Link href="/about">About</Link>
        </div>
    </nav>

    <div>
        <slot />
    </div>

</template>

<style>
.main-nav a {
    @apply text-xl px-2 hover:shadow-lg
}

</style>
