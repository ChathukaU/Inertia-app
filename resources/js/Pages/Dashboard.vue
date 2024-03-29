<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import StudentTable from '@/Components/StudentTable.vue';
import { Head } from '@inertiajs/vue3';

export const dashboard = {
    props: {
        students: {
            type: Array,
            required: true
        }
    },
    components: {
        StudentTable
    }
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <StudentTable :students="students" /> 
            </div>
        </div>
    </AuthenticatedLayout>
</template>