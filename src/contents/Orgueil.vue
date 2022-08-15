<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-1 p-md-5 text-center">Bannis l'orgueil</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1 ">
          <img :src="orgueil" alt="image-ceo" class="w-100">

        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <p>
            Le fait que tu réussisses, que tout se passe à merveille pour toi ne signifie pas
            que tu vaut mieux que les autres, que tu pries mieux que les autres, que tu sais t’organiser mieux que les autres.
            C’est juste que tu as maîtrisé ta sphère.
            Quand tu es en position de hauteur, soit celui qui tend la main, soit celui qui propulse les autres.
            Être élevé, au delà d’être une position, c’est une responsabilité.
          </p>
          <p>
            Alors toi qui cherche l’élevation, comprends déjà que c’est une responsabilité avant d’être une position.
            L’orgueil te fera croire que tu n’as besoin de personne, alors que tu as besoin des gens. L’orgueil t’empêchera
            d’accomplir tes responsabilités vis à vis des autres.
            L’orgueil tuera tout ce qu’il y’a de bon en toi.
            Bannis l’orgueil de ta vie si tu désires la hauteur.
          </p>
          <p>
            La hauteur est pour les responsables et non les orgueilleux irresponsables.
            Fais très attention quand une dose commence à se manifester en toi.
            Tue la avant qu’elle ne puisse te tuer!
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
import orgueil from "@/assets/orgueil.jpg";

export default {
  name: 'Orgueil-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      orgueil: orgueil
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>