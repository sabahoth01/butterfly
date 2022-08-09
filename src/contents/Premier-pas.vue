<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5 text-center">Le premier pas</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-3 m-5 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-5 ">
          <img :src="premier" alt="image-ceo" class="w-100">
          <!-- picture here<img :src="image-name" alt="image-cover" class="w-100"/>-->
        </div>
        <div class="about-ceo text-break p-5 text-start font-monospace fs-4">
          <p>
            Faire le premier pas a toujours été difficile, mais une fois qu’on se lance,
            tout roule et on prend le rythme. N’ aie pas peur de te lancer par crainte d’échouer,
            car il vaut mieux tenter et échouer, que de ne rien tenter.
          </p>
          <strong>
            Un échec = Une expérience acquise pour une prochaine tentative.
          </strong>
          <p>
            Dans l’apprentissage, il n’ya pas que des exploits; il y a aussi des échecs. Et ces échecs ne
            signifient pas que nous sommes incapables, mais ça nous dit simplement qu’on aurait pu mieux faire.
          </p>
          <p>
            Tu peux vaincre cette faiblesse qui t’empêche de donner le meilleur de toi. il faut juste que tu y
            croies toi-même d’abord. Personne ne t’encouragera mieux que toi-même ! Alors le premier pas à faire,
            c’est de croire que tu peux y arriver et tu y arriveras.
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
import premier from "@/assets/premier.jpg";

export default {
  name: 'premier-pas',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      premier: premier
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>