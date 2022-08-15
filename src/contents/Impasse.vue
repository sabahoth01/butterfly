<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-1 p-md-5 text-center">L'impasse</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1 ">
          <img :src="impasse" alt="image-ceo" class="w-100">

        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <p>
            Avec le temps, il faut arriver à comprendre que peut importe la grandeur d’un problème, il ne restera jamais éternel.
            C’est aussi une bonne technique pour arriver à surmonter l’épreuve.
          </p>
          <p>
            Sometimes, you just need to swipe, and it will be fixed by itself.
          </p>
          <div class=" d-block author m-5 p-3 fs-5 text-end">
            <i>
              &mdash; <cite>Keren Matondo</cite>
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
import impasse from "@/assets/impasse.jpg";

export default {
  name: 'Impasse-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      impasse: impasse
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>