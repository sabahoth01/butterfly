<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5 text-center"> Tirer profit de tout ce qui nous arrive dans la vie »<br/>— Welcome to the World of Possibilities!</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-3 m-5 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-5 ">
          <img :src="profiter" alt="image-ceo" class="w-100">
          <!-- picture here<img :src="image-name" alt="image-cover" class="w-100"/>-->
        </div>
        <div class="about-ceo text-break p-5 text-start font-monospace fs-4">
          <p>
            Les échecs et les réussites font partie intégrante de la vie.
            Les échecs nous font réaliser qu’on aurait pu mieux faire, et les réussites sont
            les récompenses des efforts fournis; le fruit du travail accompli.
            Échec ou réussite, tous valent leur pesant d’or dans notre vie. Rien ne vaut plus que l’autre.
            Il faut donc savoir les apprécier les uns autant que les autres afin d’en tirer profit.
          </p>
          <strong>
            « La vie est le temps qui s’écoule de la naissance à la mort. Tout Homme qui vit, est investi
            d’une mission qui lui est attribuée par Dieu. Il la découvre au travers des épreuves qu’il traverse sur terre. »
            <br/>&mdash Saint-paul Lumpungu Ekea
          </strong>

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
import profiter from "@/assets/profiter.jpg";

export default {
  name: 'profiter-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      profiter: profiter
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>