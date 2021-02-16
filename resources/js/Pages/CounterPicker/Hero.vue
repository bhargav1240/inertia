<template>
    <div>
        {{ heroName }}
    </div>
</template>
<script>
export default {
    props:{
        hero:{
            type: Object
        },
        heroName:{
            type: String
        },
        heroCode:{
            type: String
        }
    },
    data: function () {
        return {
            l1: "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/heroes/",
            l2: "_vert.jpg"
        }
    }
}
</script>

<style scoped>
div {background-color: coral;}
</style>