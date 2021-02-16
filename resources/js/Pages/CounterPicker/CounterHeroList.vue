<template>
    <div>
        <div>List of counter heroses for selected heroes</div>
        <div>
            <hero />
        </div>
    </div>
</template>
<script>
import Hero from './Hero.vue';
export default {
  components: { Hero },
    
}
</script>