<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-md-5 p-1 text-center">Les peurs qui sauvent</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1 ">
          <img :src="peur" alt="image" class="w-100">
        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <strong>
            UNE PENSÉE :  » PARFOIS, IL VAUT MIEUX SE TAIRE ET AGIR DANS LE SILENCE QUE DE BEAUCOUP PARLER
            SANS VRAIMENT PRODUIRE DES RÉSULTATS. LE SILENCE EST AUSSI UN ATOUT INFAILLIBLE POUR LES GRANDS EXPLOITS »
          </strong>

          <p>
            La peur est une émotion ressentie généralement en présence ou dans la perspective d’un danger, ou d’une menace.
            En d’autres termes, la peur est une conséquence de l’analyse du danger et permet au sujet de le fuir ou de le combattre,
            également connue sous le terme « la phobie et réponse combat-fuite
          </p>
          <p>
            Dans la vie, on nous enseigne que la peur est négative, on nous dit qu’elle représente une barrière et qu’il faut à tout prix
            la bannir de nos vies.
            Si comme on dit la peur est dangereuse, alors la bannir de nos vies serait donc bénéfique pour nous? Et si au lieu de la bannir,
            on s’en servait pour créer un moyen de survie ?
          </p>
          <p>
            Nous chassons la peur parce qu’elle nous empêche de nous battre comme il faut. Quand on a peur, soit on se cache, soit on fuit.
            Et cela dépend aussi de la cause de la peur.
            Je parle des peurs qui sauvent, car j’ai réalisé que pour avoir le courage d’affronter certaines situations, il faut d’abord
            avoir peur d’elles. Et cette peur nourrit en nous un mécanisme d’auto-défense, et nous permet également de nous rendre compte
            de nos failles et de nos incapacités.
          </p>
          <p>
            Les peurs qui sauvent, ce ne sont que les craintes que nous avons dans notre vie quotidienne par rapport à ce
            que nous souhaitons réaliser.
            Quand tu as peur d’échouer à un examen, tu vas maximiser plus d’énergie pour bien réviser tes notes; quand tu as peur
            de rater ton bus le matin, tu vas te lever tôt pour te préparer et quitter la maison bien avant.

          </p>

          <strong>
            « Toutes les peurs ne sont pas d’emblée des peurs qui sauvent. »<br/>
            Certaines peurs sont d’abord négatives avant de devenir positives.
          </strong>
          <p>
            Pour transformer ce genre de peur, il faudrait alors comprendre quel est le message caché derrière cette peur.
            C’est une démarche qui conduit vers le moyen de vaincre la peur. Quand on comprends pourquoi on a peur, on saura
            alors agir en conséquence.
          </p>
          <p>
            Les peurs existent pour nous booster et non pour nous freiner. Quand le message caché derrière la peur est cerné,
            alors cette dernière devient un catalyseur d’énergie pour nous amener à les vaincre.
            Comprends seulement pourquoi tu as peur, ainsi tu auras entre tes mains toutes les armes nécessaires pour les vaincre,
            et les transformer en quelque chose de très enrichissant pour ton équilibre.

          </p>
          <p>
            Je t’invite à présent à prendre une feuille et un stylo, et à y noter toutes ces peurs qui te hantent.
            Ensuite, médite sur chacune d’elles et découvre pourquoi elles existent en toi, Et après réfléchi sur comment
            tu pourras t’en débarrasser.
            Tu peux également m’écrire si tu as besoin d’aide pour cet exercice, et je me ferai un plaisir de t’aider !
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
import peur from "@/assets/peurs-sauvent.jpg";

export default {
  name: 'Peur-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      peur: peur
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>