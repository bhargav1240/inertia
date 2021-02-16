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
                    <selected-hero-list :heroes="selectedHero"/>
                    <counter-hero-list />
                    <hero-list @addHero="updateList($event)"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import HeroList from './HeroList.vue'
    import SelectedHeroList from './SelectedHeroList.vue'
    import CounterHeroList from './CounterHeroList.vue'

    export default {
        components: {
            AppLayout,
            HeroList,
            SelectedHeroList,
            CounterHeroList,
        },
        data: function (){
            return {
                selectedHero: [],
            }
        },
        methods:{
            updateList(hero){
                this.selectedHero.push(hero);
            }
        }
    }
</script>
