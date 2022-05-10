<template>
    <navMenu/>
    <h1>Evenements</h1>
    <footerRs/>
</template>
<script>
    import footerRs from '@/components/Footer.vue'
    import navMenu from '@/components/Nav.vue'
    export default {
        name: 'eventsA',
        components: {
            footerRs,
            navMenu
        }
    }
</script>