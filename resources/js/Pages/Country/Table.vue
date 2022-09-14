<template>
    <table class="w-full border-collapse border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
        <thead class="bg-slate-50 dark:bg-slate-700">
            <tr class="text-center dark:text-slate-200 text-slate-900 font-semibold">
                <th class="w-2/12 border border-slate-300 dark:border-slate-600 py-3">
                    #
                </th>
                <th class="w-5/12 border border-slate-300 dark:border-slate-600 py-3">
                    Nombre
                </th>
                <th class="w-2/12 border border-slate-300 dark:border-slate-600 py-3">
                    Estado
                </th>
                <th class="w-3/12 border border-slate-300 dark:border-slate-600 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="country, index in countries" :key="country.id">
                <td class="border text-center px-1 py-2">
                    {{ index + 1 }}
                </td>
                <td class="border pl-3">
                    {{ country.name }}
                </td>
                <td class="border text-center">
                    {{ country.is_active == 1 ? 'Activo' : 'Inactivo' }}
                </td>
                <td class="border text-center">
                    <Link
                        href=""
                        class="bg-emerald-500 hover:bg-emerald-600 text-white rounded-sm font-bold py-1 px-2 mr-4"
                    >
                        Editar
                    </Link>

                    <Link
                        href=""
                        class="bg-rose-500 hover:bg-rose-600 text-white rounded-sm font-bold py-1 px-2"
                    >
                        Eliminar
                    </Link>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';

    defineProps({
        countries: Array,
    });
</script>
