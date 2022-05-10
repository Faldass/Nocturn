<template>
    <navMenu/>
    <h1>Connexion</h1>
    <footerRs/>
</template>
<script>
    import footerRs from '@/components/Footer.vue'
    import navMenu from '@/components/Nav.vue'
    export default {
        name: 'connexionU',
        components: {
            footerRs,
            navMenu
        }
    }
</script>