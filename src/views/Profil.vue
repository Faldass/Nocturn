<template>
    <navMenu/>
    <h1>Profil</h1>
    <footerRs/>
</template>
<script>
    import footerRs from '@/components/Footer.vue'
    import navMenu from '@/components/Nav.vue'
    export default {
        name: 'profilU',
        components: {
            footerRs,
            navMenu
        }
    }
</script>