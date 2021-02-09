<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Counter Picker
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <select-heroes />
                    <counter-heroes />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import CounterHeroes from './CounterHeroes.vue'
    import SelectHeroes from './SelectHeroes.vue'

    export default {
        components: {
            AppLayout,
            CounterHeroes,
            SelectHeroes,
        },
        data: function () {
            return {
                heroes: [],
                hero: {},
                selectedHeroes: [],
                counterHeroes: []
            }
        },
        methods: {
            getAllDetails(){
                axios.get('/counterpicker/heroes')
                .then(response => {
                    console.log(response.data);
                })
                .catch(errors => {
                    console.log(errors);
                })
            }
        },
        created(){
            this.getAllDetails();
        }
    }
</script>
