<template>
    <navMenu/>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
  <footerRs/>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import footerRs from '@/components/Footer.vue'
import navMenu from '@/components/Nav.vue'

export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    footerRs,
    navMenu
  }
}
</script>
