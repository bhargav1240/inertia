<template>
    <div>
        <ul>
            <li v-for="hero in heroes">
                <img :src="l1+hero.name+l2">
                {{ hero.name }}
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            heroes: [],
            hero: {},
            l1: "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/heroes/",
            l2: "_vert.jpg"
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
        }
    },
    created(){
        this.getAllDetails();
    }
}
</script>