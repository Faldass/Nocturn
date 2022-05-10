<template>
    <navMenu/>
    <h1>Equipe</h1>
    <footerRs/>
</template>
<script>
    import footerRs from '@/components/Footer.vue'
    import navMenu from '@/components/Nav.vue'
    export default {
        name: 'membresA',
        components: {
            footerRs,
            navMenu
        }
    }
</script>