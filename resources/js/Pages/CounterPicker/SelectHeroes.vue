<template>
    <div>
        <div>List of heros to select</div>
        <div>
            <hero />
        </div>
    </div>
</template>
<script>
    import Hero from './Hero.vue'
    export default {
    components: { Hero },
        
    }
</script>