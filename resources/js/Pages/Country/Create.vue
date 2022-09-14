<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crear País
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-1 md:gap-6">
                    <div class="md:col-span-1 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">

                            <form @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">
                                    Nombre
                                </label>
                                <input
                                    type="text"
                                    class="form-input w-full rounded-md shadow-sm"
                                >
                                <div class="mt-4">
                                    <button
                                        class="bg-emerald-500 hover:bg-emerald-600 text-white rounded-sm font-bold py-2 px-4 mr-2"
                                    >Crear</button>
                                    <Link
                                        :href="route('countries.index')"
                                        class="bg-blue-500 hover:bg-blue-600 text-white rounded-sm font-bold py-2 px-4 mr-2"
                                    >Volver</Link>
                                </div>
                            </form>

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
</script>

<style scoped>

</style>
