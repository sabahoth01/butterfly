<template>
  <div class="home">
    <img alt="blog logo" src="../assets/logoo.png">
    <Home msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
// @ is an alias to /src
import Home from '@/components/Home.vue'

export default {
  name: 'HomeView',
  components: {
    Home
  }
}
</script>
<style>

</style>
