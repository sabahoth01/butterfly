<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-1 p-md-5 text-center">La foi, une puissance que tu dois posséder</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1 ">
          <img :src="foi" alt="image-ceo" class="w-100">

        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <p>
            Un jour, quelqu’un m’a enseigné la différence entre « croire » et « savoir »
            C’était pendant une époque de ma vie où je vivais avec beaucoup de peurs et de doutes.
            Il m’avait dit ce jour là que plein de gens vivent avec des connaissances auxquelles ils
            ne croient pas vraiment. Ils pensent y croire parce qu’ ils savent, mais tu verras qu’il n’en
            faut pas beaucoup pour qu’ils soient troublés.
          </p>
          <p>
            Il y’avait des jours où je me regardais dans une glace et je me demandais : keren, es-tu une bonne personne ?
            Ou tu te caches derrière un masque pour y croire?
          </p>
          <p>
            Ça arrivait quand je me sentais mal dans ma peau, quand je sentais que je ne gère plus bien les choses.
            Je détestais vraiment ces moments…
            Mais vous savez, Aujourd’hui j’aime beaucoup ces moments. Ces moments de remise en question qui me mettent
            face à moi-même. Ces moments qui me redonnent la force et de l’estime.
          </p>
          <p>
            Car j’ai appris à tirer le meilleur de ces moments de crise. Quand le doute sur le fait que je sois une bonne
            personne resurgit, je me dis à moi-même : « keren tu sais bien que tu l’es » et ce, parceque j’y crois. J’ai foi en moi.
            Je crois aux efforts que je fais chaque jour et je ne laisse plus place au doute et à la peur.
            Cet exercice qui me semblait impossible, est devenu possible aujourd’hui.
          </p>
          <p>
            J’aimerais que ce petit récit puisse t’aider, toi qui me lis, à toujours choisir la voie de la foi.
            Au cours de mon développement personnel, c’est le verbe CROIRE qui m’a aidé à voler plus haut et à chasser mes peurs.
          </p>
          <p>
            Voilà pourquoi j’écris cet article aujourd’hui pour t’encourager. Car avec le temps j’ai compris que même quand on est blessé,
            une autre blessure peut venir encore avant même qu’on soit guéri de la première et une défaite peut aussi se suivre d’une autre défaite.
            Il faut donc être bien équipé pour bien appréhender ces moments de turbulences.
          </p>
          <p>
            Pour mon cas c’était le doute quant à ma personne, mais pour toi ça pourrait être le doute quant à tes projets, tes études, etc.
            Tu sais peut-être que ton projet vaut de l’or, mais beaucoup de choses te font douter et t’empêchent d’y croire. Ou peut-être tu sais
            que t’es suffisamment intelligent pour être le premier de ta promotion, mais dans le fond tu te dis que c’est plutôt un rêve qui ne ne
            se réalisera jamais et tu continues de vivre normalement comme ci tu n’avais rien de spécial.
          </p>
          <p>
            Dorénavant, j’aimerais que tu ne te limite plus à savoir que des possibilités existent, mais que tu puisses également croire en elles.
            La foi nous donne des ailes!
            J’ai appris à croire en ma réussite, en mon bonheur et aujourd’hui je me sens 100 fois plus mieux qu’il y’a 3ans.
            Croire peut tout changer je vous l’assure ! Et j’en suis la preuve.
          </p>
          <p>
            Crois, sois déterminé et va de l’avant
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
import foi from "@/assets/foi.jpg";

export default {
  name: 'Foi-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      foi: foi
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>