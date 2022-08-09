<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5 text-center">{{ Title }}</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container m-2 text-break d-block">
      <!-- <article-component-name/> -->
    </div>
    <div class="fontAwesome my-5 align-items-center"></div>
  </div>
  <Footer/>
</template>


<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";

export default {
  name: 'Blog-content-template',
  components:{
    NavBar,
    Footer
  },
  props: {
    Title: String
  },
  methods: {
    resolve_img_url: function (path) {
      let images = require.context('../assets/', false, /\.png$|\.jpg$/)
      return images("./"+path)
    }
  }
}
</script>

<style scoped>

</style>