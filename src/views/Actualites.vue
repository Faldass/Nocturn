<template>
  <navMenu/>
    <h1>Actualités</h1>
    <HelloWorld/>
  <footerRs/>
</template>

<script>
// @ is an alias to /src
import footerRs from '@/components/Footer.vue'
import navMenu from '@/components/Nav.vue'
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'actusA',
  components: {
    footerRs,
    navMenu,
    HelloWorld
  }
}
</script>
