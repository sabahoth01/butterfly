<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5">
      Blog
    </h1>
  </div>
  <div class="container align-self-center d-flex flex-wrap flex-column
    flex-md-row  justify-content-center align-items-center">
    <div class="card">
      <img :src="confier" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Se confier... ?</h5>
        <p class="card-text">Je me suis confié, mais à présent, je me sens en insécurité…
          Ai-je fait un mauvais...</p>
        <router-link to="/aller-de-l-avant" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="passion" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Soyons des passionnés !</h5>
        <p class="card-text">Avez-vous déjà pensé à quel rôle vous voulez jouer autour de vous ou quel titre vous voulez obtenir dans la vie?</p>
        <router-link to="/passion" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="choix" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Les choix</h5>
        <p class="card-text">La capacité à prendre des décisions importantes même dans les moments les plus tumultueux est un vrai atout.</p>
        <router-link to="/choix" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="avant" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Aller de l'avant</h5>
        <p class="card-text">Une seule mauvaise décision prise pour n’importe quelle domaine de la vie, pourrait être fatal pour notre destiné.</p>
        <router-link to="/aller-de-l-avant" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="orgueil" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Bannis l'orgueil</h5>
        <p class="card-text">Le fait que tu réussisses, que tout se passe à merveille pour toi ne signifie pas que tu vaut mieux que les autres...</p>
        <router-link to="/orgueil" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="foi" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">La foi, une puissance</h5>
        <p class="card-text"> Un jour, quelqu'un m'a enseigné la différence entre "croire" et "savoir"... je vivais avec beaucoup de peurs et de doutes.</p>
        <router-link to="/foi" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="reparer" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Réparer...</h5>
        <p class="card-text">Dans les relations humaines, la réparation est un signe d'amour et de considération. Il ne s'agit pas...</p>
        <router-link to="/reparer" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="impasse" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">L'impasse</h5>
        <p class="card-text">Avec le temps, il faut arriver à comprendre que peut importe la grandeur d'un problème, il ne restera jamais éternel...</p>
        <router-link to="/impasse" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="peur" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Les peurs qui sauvent</h5>
        <p class="card-text">L'important ce n'est pas de savoir ce qui ne va pas. ce qui compte le plus, c'est d'être capable de régler et de gérer ce qui ne va...</p>
        <router-link to="/peur" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="aubout" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Jusqu'au bout, malgré tout</h5>
        <p class="card-text">Un jour, quelqu'un m'a dit : "peut importe les péripéties de la vie, tu dois apprendre à t'en tenir à tes décisions...</p>
        <router-link to="/au-bout" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="surmonter" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Surmonter les déceptions...</h5>
        <p class="card-text">il y'a des jours où, tu dois te lever avec cette pensée : "à qui vais-je faire du bien ?"...</p>
        <router-link to="/surmonter" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="besoins" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Ce dont tu as besoin</h5>
        <p class="card-text">Il faut aller de l'avant en prenant de bonnes résolutions,en écoutant les bons conseils...</p>
        <router-link to="/besoin" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="profiter" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Tirer profit de tout</h5>
        <p class="card-text">Les échecs et les réussites font partie intégrante de la vie. Les échecs nous font réaliser qu'on aurait pu mieux...</p>
        <router-link to="/profiter" target="_blank">Lire</router-link>
      </div>
    </div>

    <div class="card">
      <img :src="pas" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Prémier pas</h5>
        <p class="card-text">Faire le premier pas a toujours été difficile, mais une fois qu'on se lance, tout roule et on prend le rythme.</p>
        <router-link to="/premier-pas" target="_blank">Lire</router-link>
      </div>
    </div>

  </div>

  <Footer/>

</template>

<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";
import passion from "@/assets/passion.jpg";
import foi from "@/assets/foi.jpg";
import confier from "@/assets/latest-image.jpg";
import pas from "@/assets/premier.jpg";
import profiter from "@/assets/profiter.jpg";
import besoins from "@/assets/besoin.jpg";
import choix from "@/assets/choix.jpg";
import surmonter from "@/assets/surmonter.jpg";
import aubout from "@/assets/aubout.jpg";
import peur from "@/assets/peur.jpg";
import impasse from "@/assets/impasse.jpg";
import reparer from "@/assets/reparer.jpg";
import orgueil from "@/assets/orgueil.jpg";
import avant from "@/assets/faire.jpg";

export default {
  name: "Blog-content",
  components: {
    NavBar,
    Footer
  },

  data(){
    return{
      confier: confier,
      passion : passion,
      choix: choix,
      pas: pas,
      profiter: profiter,
      besoins: besoins,
      surmonter: surmonter,
      aubout: aubout,
      peur: peur,
      impasse: impasse,
      reparer: reparer,
      orgueil: orgueil,
      avant: avant,
      foi: foi
    }
  }

}
</script>

<style scoped>
.card{
  margin: 0.8%;
  flex: 24%;
}

img{
  width: 100%;
}
</style>