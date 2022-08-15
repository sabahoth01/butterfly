<template>
  <NavBar/>
  <div class="container ">
    <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
      <div class="avatar p-md-5 p-1">
        <img :src="photo" alt="image-ceo" class="w-100">
      </div>
      <div class="about-ceo text-break p-md-5 p-1 fs-5 text-start font-monospace fs-md-4">
        <p>
          « Le changement est un processus à durée déterminée par la volonté qui accompagne
          chacune de nos intentions et chacun de nos choix » Tel un leitmotiv, cette mentalité
          retentit dans la partition de la vie de Keren Matondo.
        </p>
        <p>
          En effet, Keren Matondo, aînée d’une famille de quatre enfants, est une personne passionnée
          par le changement intérieure. Après avoir obtenu son baccalauréat au complexe scolaire Gianelli
          où elle fit toutes ses études pré-universitaires en 2015, en section scientifique, option Chimie-biologie,
          elle choisit de poursuivre ses études en Informatique de Gestion faisant montre d’une bonne compréhension dans le domaine des sciences.
          Précocement passionnée d’écriture et de cuisine, elle se délectait déjà dans sa tendre enfance des moments
          de rédaction dans son petit carnet « secret » et « bien gardé ».
        </p>
        <p>
          Ayant traversée une série d’épreuves et voyant autour d’elle le nombre toujours croissant
          des personnes blessées et frustrées par leur quotidien, elle décide au soir de l’année 2019
          d’agir afin d’investir dans l’homme et de changer la personne de l’intérieure pour une vie épanouie et productive.
          C’est ainsi que sont nés « les podcasts de Keren Matondo », un moyen pour elle de parvenir à communiquer
          ses écrits et sa pensée positive de manière ludique et interactive.
        </p>
        <p>
          Très stricte quant à l’ordre et faisant preuve d’un caractère plutôt introvertie et fort au premier abord,
          elle sait se confier lorsqu’elle se sent en confiance.
          Aujourd’hui, elle vit une vie épanouie quoi que mouvementée et rêve d’exploiter sa passion en cuisine afin d’ouvrir un restaurant.
        </p>
        <div class=" d-block proverbe m-5 p-3 fs-5 align-items-center">
          <i>
            « Elle est revêtue de force et de gloire, Et elle se rit de l’avenir. »
           <br/>&mdash; <cite>Proverbes 31: 25</cite>
          </i>
        </div>
      </div>
    </div>
  </div>
  <Footer/>
</template>

<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";
import photo from '@/assets/kerr.jpeg'

export default {
  name: "CEO-content",
  components: {
    NavBar,
    Footer
  },
  data(){
    return{
      photo:photo
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>