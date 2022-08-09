<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5 text-center">Ce dont tu as besoin pour aller de l’avant</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-3 m-5 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-5 ">
          <img :src="besoin" alt="image-ceo" class="w-100">
          <!-- picture here<img :src="image-name" alt="image-cover" class="w-100"/>-->
        </div>
        <div class="about-ceo text-break p-5 text-start font-monospace fs-4">

          <p>
            Il faut aller de l’avant en prenant de bonnes résolutions,en écoutant les bons conseils,
            en avançant avec les bonnes personnes, en ayant des bonnes pensées, et en ayant une bonne attitude.
            Oui, tu as un besoin de tout ce bagage de bonnes choses! Laisse un peu de côté tous ces bagages de
            négativité et de désespoir que tu as longtemps porté.
          </p>
          <p>
            Apprécie ta personne, développe tes capacités, et ne laisse rien, ni personne te persuader
            que tu ne vaut rien.
            <br/>Tu as de la valeur !
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
import besoin from "@/assets/besoin.jpg";

export default {
  name: 'Besoins-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      besoin: besoin
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>