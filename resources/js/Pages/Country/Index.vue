<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Países
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-1 md:gap-6">

                    <div class="md:col-span-1 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <div class="flex justify-between">
                                <input
                                    type="search"
                                    class="form-input rounded-md shadow-sm"
                                    placeholder="Buscar..."
                                    v-model="valor"
                                    @keyup="search"
                                >
                                <Link
                                    :href="route('countries.create')"
                                    class="bg-emerald-500 text-white font-bold px-4 py-2 rounded-md"
                                >
                                    Crear
                                </Link>
                            </div>

                            <hr class="my-4">

                            <Table :countries="countries"/>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import Table from './Table.vue';

    defineProps({
        countries: Array,
    });
</script>

<style scoped>

</style>
