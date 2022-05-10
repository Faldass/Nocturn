<template>
    <navMenu/>
    <h1>Boutique</h1>
    <footerRs/>
</template>
<script>
    import footerRs from '@/components/Footer.vue'
    import navMenu from '@/components/Nav.vue'
    export default {
        name: 'boutiqueU',
        components: {
            footerRs,
            navMenu
        }
    }
</script>