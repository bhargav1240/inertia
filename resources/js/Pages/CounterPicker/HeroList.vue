<template>
    <div>
        <div v-for="(hero, index) in heroes">
            <div @click="addHero(hero, index)">
                <hero :heroName="hero.name" :heroCode="hero.code" :hero="hero"/>
            </div>
        </div>
    </div>
</template>
<script>
import Hero from './Hero.vue';

export default {
    components: { Hero },
    data: function () {
        return {
            heroes: []
        }
    },
    methods: {
        getAllDetails(){
            axios.get('api/heroes')
            .then(response => {
                this.heroes = response.data;
            })
            .catch(errors => {
                console.log(errors);
            })
        },
        addHero(hero, index){
            this.heroes.splice(index, 1);
            this.$emit('addHero', hero);
        }
    },
    created(){
        this.getAllDetails();
    }
}
</script>

<style scoped>

</style>