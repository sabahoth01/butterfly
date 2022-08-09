<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5 text-center">Article-title</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-3 m-5 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-5 ">
          <!-- picture here<img :src="image-name" alt="image-cover" class="w-100"/>-->
        </div>
        <div class="about-ceo text-break p-5 text-start font-monospace fs-4">
          <!-- <p> <article-content/> </p> -->

          <div class=" d-block author m-5 p-3 fs-5 text-end">
            <i>
              &mdash; <cite>Author name</cite>
            </i>
          </div>
        </div>
      </div>
    </div>
    <div class="fontAwesome my-5 align-items-center"></div>
  </div>
  <Footer/>
</template>


<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";
//import image-imported-name from "@/assets/your img here;

export default {
  name: 'Blog-content-template',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
     // image-name: image-imported-name
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>