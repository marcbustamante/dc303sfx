<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PageLayout from '../PageLayout.vue';

const props = defineProps({
    investors: Object,
});
</script>

<template>

    <Head title="Investors" />

    <PageLayout>
        <div>
            <div class="flex justify-between items-center mb-4 mt-4">
                <h1 class="text-2xl font-bold">Investors</h1>
                <Link href="/investors/create" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Add Investor
                </Link>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div v-for="investor in props.investors.data" :key="investor.id" class="bg-green-100 border border-green-300 p-2 rounded-md text-sm max-w-xs">
                    <h2 class="text-lg font-semibold mb-2">{{ investor.last_name }}, {{ investor.first_name }}</h2>
                    <p><strong>Phone:</strong> {{ investor.phone }}</p>
                    <p><strong>Address:</strong> {{ investor.address }}</p>
                    <p><strong>Investment Type:</strong> {{ investor.investment_type }}</p>
                </div>
            </div>

            <div class="mt-4 flex space-x-2">
                <Link
                    v-if="props.investors.prev_page_url"
                    :href="props.investors.prev_page_url"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                >
                ← Back
                </Link>
                <Link
                    v-if="props.investors.next_page_url"
                    :href="props.investors.next_page_url"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 "
                >
                Next →
                </Link>
            </div>
        </div>
    </PageLayout>

</template>
