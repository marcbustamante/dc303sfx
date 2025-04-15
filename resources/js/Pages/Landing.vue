<script setup>
import { Head } from '@inertiajs/vue3';
import PageLayout from './PageLayout.vue';


</script>

<template>
    <Head title="Instructions" />
    <PageLayout>

        <div class="bg-green-100 border border-green-300 p-8 rounded-lg w-[600px] mx-auto mt-12">
            <h2 class="text-3xl">General Instructions</h2>

            <p>
                This project already contains model 'Investor'.
                Your task are the following:
            </p>
            <ol class="list-decimal ms-8">
                <li>From the Investors page, display all the investors in alphabetical order by their Last Name</li>
                <li>The list of investors must be paginated with 10 investors per page.</li>
                <li>Each investor must be displayed as a card and arranged in a grid</li>
                <li>
                    The Investor page will have a prominent 'Add Investor' button at the top right of the page.
                    This will open a new page containing a form for creating a new Investor
                </li>
                <li>
                    The 'Create Investor' form must have a full-featured validation system where
                    each field is required and error messages are shown on each individual fields.
                    And, the investor type field must be a COMBO BOX.
                </li>
                <li>
                    The about page will contain your information: <br>
                    Name: <br>
                    Course & Year: <br>
                    Cell No.:
                </li>
            </ol>
        </div>

    </PageLayout>
</template>
