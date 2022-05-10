<template>
    <navMenu/>
    <h1>Histoire</h1>
    <footerRs/>
</template>
<script>
    import footerRs from '@/components/Footer.vue'
    import navMenu from '@/components/Nav.vue'
    export default {
        name: 'PresentationA',
        components: {
            footerRs,
            navMenu
        }
    }
</script>