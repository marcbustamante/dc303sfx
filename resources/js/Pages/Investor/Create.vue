<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';

const form = useForm({
    last_name: '',
    first_name: '',
    phone: '',
    address: '',
    investment_type: 'micro',
});

function submit() {
    form.post('/investors');
}
</script>

<template>
    <Head title="Add Investor" />
    <div class="max-w-md mx-auto mt-10 p-6 bg-green-100 border border-green-300 p-2 rounded-md">
        <h1 class="text-2xl font-bold mb-6">Create Investor</h1>
        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <label for="last_name" class="block font-semibold mb-1">Last Name</label>
                <input v-model="form.last_name" id="last_name" type="text" class="w-full border rounded px-3 py-2" required />
            </div>
            <div>
                <label for="first_name" class="block font-semibold mb-1">First Name</label>
                <input v-model="form.first_name" id="first_name" type="text" class="w-full border rounded px-3 py-2" required />
            </div>
            <div>
                <label for="phone" class="block font-semibold mb-1">Phone</label>
                <input v-model="form.phone" id="phone" type="text" class="w-full border rounded px-3 py-2" required />
            </div>
            <div>
                <label for="address" class="block font-semibold mb-1">Address</label>
                <input v-model="form.address" id="address" type="text" class="w-full border rounded px-3 py-2" required />
            </div>
            <div>
                <label for="investment_type" class="block font-semibold mb-1">Investment Type</label>
                <select v-model="form.investment_type" id="investment_type" class="w-full border rounded px-3 py-2" required>
                    <option value="micro">Micro</option>
                    <option value="sponsor">Sponsor</option>
                    <option value="benefactor">Benefactor</option>
                </select>
            </div>
            <div class="flex justify-between items-center">
                <Link href="/investors" class="text-white px-4 py-2 rounded bg-red-600 hover:bg-red-700">Cancel</Link>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Investor</button>
            </div>
        </form>
    </div>
</template>