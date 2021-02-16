<template>
    <div>
        <div>Selected Hero List</div>
        <div v-for="hero in heroes">
            <hero :heroName="hero.name" :heroCode="hero.code" :hero="hero"/>
        </div>
    </div>
</template>
<script>
    import Hero from './Hero.vue'
    export default {
        props:['heroes'],
    components: { Hero },
        
    }
</script>