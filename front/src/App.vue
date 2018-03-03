<template>
  <div id="app">
    <navbar></navbar>
    <router-view></router-view>
    <footer-tem></footer-tem>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
export default {
  components:{
    'navbar':Navbar,
    'footer-tem':Footer
  }
}
</script>

<style>

</style>
