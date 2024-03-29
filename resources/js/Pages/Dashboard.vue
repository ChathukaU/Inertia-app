<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Intro to CSS</td>
                            <td>Adam</td>
                            <td>8585</td>
                        </tr>
                        <tr class="bg-emerald-200">
                            <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                            <td>Adam</td>
                            <td>8585</td>
                        </tr>
                        <tr>
                            <td>Intro to JavaScript</td>
                            <td>Chris</td>
                            <td>8585</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>