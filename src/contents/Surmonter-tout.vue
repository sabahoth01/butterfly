<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-md-5 p-1 text-center">« Comment je surmonte les déceptions quotidiennes »</h1>
    <div class="fontAwesome my-md-5 my-1 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1 ">
          <img :src="surmonter" alt="image-ceo" class="w-100">

        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <p>
            il y’a des jours où, tu dois te lever avec cette pensée : « à qui vais-je faire du bien aujourd’hui ? ».
            La vie ne nous offre pas toujours des cadeaux; Et à chaque réveil, correspond un nouveau défi qu’il faut à tout prix relever.
            Il faut donc mettre en place plusieurs stratégies, pour pouvoir réussir cette prouesse. Et décider de faire du bien à quelqu’un
            d’autre que toi, est aussi l’une des grandes stratégies à mettre en place.
          </p>
          <p>
            C’est parcequ’on veut toujours que les autres s’occupent de nous, et soient aux petits soins avec nous, que trop souvent on déprime.
            C’est soit parceque le retour est négatif, soit parceque le retour n’est pas ce qu’on espérait, et on se dit qu’on est peut-être pas la priorité.
          </p>
          <p>
            Retiens ceci: « tu ne pourras jamais être la priorité de quelqu’un pour toujours, mais tu pourras néanmoins continuer d’occuper
            une place importante dans sa vie ». Les priorités changent selon le temps, mais l’amour continue d’exister même quand les priorités changent.
          </p>
          <p>
            Tu as sûrement eu des amis avec qui tu n’imaginais aucune distance pendant que tu étais au lycée, mais après le diplôme chacun a pris sa route.
            Vous avez certainement gardé contact, mais l’affinité et les centres d’intérêt ont changé. Ce qui est tout à fait normal ! Et il est clair
            que ce n’est pas parce que vous ne vous écrivez plus fréquemment, qu’il n’y a plus d’amour entre vous, non!
          </p>
          <p>
            Il faut se mettre à cette évidence pour éviter de se torturer quelques fois, Car les priorités changent réellement.
            Et la meilleure position à occuper, c’est celle du donneur. Ça te donnera une certaine autorité et une autonomie dans la vie.
            Aujourd’hui je te propose de refuser toute dépendance en choisissant de t’occuper des autres, plutôt que t’attendre qu’on s’occupe de toi.
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
import surmonter from "@/assets/surmonter.jpg";

export default {
  name: 'Surmonter-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      surmonter: surmonter
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>