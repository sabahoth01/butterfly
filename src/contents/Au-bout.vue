<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-1 p-md-5 text-center">Je décide que: J’irai jusqu’au bout, j’accomplirai mon but malgré tout.</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1">
          <img :src="aubout" alt="image-ceo" class="w-100">

        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <p>
            Un jour, quelqu’un m’a dit : « peut importe les péripéties de la vie, tu dois apprendre à t’en tenir à tes décisions.
            Quand tu prends une décision, tu dois vraiment faire tout pour la tenir jusqu’au bout. Donc, aussi longtemps que cela
            dépendra de toi, cette décision devra être maintenue. Et tu dois croire en tes capacités pour maintenir cette décision «
          </p>
          <p>
            J’ai souvent été très rétrograde dans le passé. Je n’allais jamais jusqu’au bout, car je laissais la peur et
            la honte prendre le devant sur ma vie. Je me punissait sévèrement après une erreur, et je m’apitoyais sur mon sort
            comme si j’étais sous la malédiction. Je laissais les regards des autres dicter ma vie, et je ne faisais rien pour
            défendre ce que je voulais. Aujourd’hui je me demande encore si je voulais réellement quelque chose ou je me plaisais
            au fait de dépendre des autres…
          </p>
          <p>
            Le jour où « j’ai décidé  » que j’allais affronter mes inquiétudes et les regards des autres, ma vie a pris une nouvelle tournure.
            J’avais alors réalisé que le fait d’avoir peur n’est pas une fatalité, car il existe ¹des peurs qui sauvent, que le fait d’avoir
            honte était tout à fait naturel et gérable surtout, et que je pouvais aussi ignorer les opinions qui ne me convenaient pas.
          </p>
          <p>
            La décision est une force qui nous permet de soulever des montages.
            Il y a des ces choses qui nous hantent depuis, mais quand on décide d’y mettre un terme, automatiquement on change la donne!
          </p>
          <p>
            Décide oui, mais fais-le avec fermeté.<br/>
            Sois conscient de ta décision et tiens la.<br/>
            Tu veux arrêter, décide !<br/>
            Tu veux continuer, décide !<br/>
            Tu veux commencer, décide !<br/>
          </p>
          <p>
            Crois que tu as la capacité de changer les choses, et décide d’agir.
            J’étais consciente de mon état, mais ce n’est pas pour autant que je l’avais changé.
            Je ne l’ai changé que lorsque j’ai pris des décisions.
            Car, la décision est une force qui suscite le courage et la persévérance, en vue de créer le succès.
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
import aubout from "@/assets/aubout.jpg";

export default {
  name: 'au-bout',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      aubout: aubout
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>