<template>
    <h1>Equipe</h1>
    <div class="rowM">
        <membreA/>
        <membreA/>
        <membreA/>
    </div>
        <membreA/>
        <membreA/>
        <membreA/>
</template>
<script>
    import membreA from '@/components/Membre.vue'
    export default {
        name: 'membresA',
        components: {
            membreA,
        }
    }
</script>

<style scoped>
    .rowM{
        display: flex;
    }
</style>