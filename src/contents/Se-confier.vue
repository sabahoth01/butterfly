<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5 text-center">Sommes-nous en sécurité quand nous nous confions?</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-3 m-5 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-5 ">
          <img :src="confier" alt="image-ceo" class="w-100">
          <!-- picture here<img :src="image-name" alt="image-cover" class="w-100"/>-->
        </div>
        <div class="about-ceo text-break p-5 text-start font-monospace fs-4">
          <p>
            On dit toujours que se confier est un exercice qui nous libère et je suis d’accord.
            Après avoir libéré ce poids qui pèse sur nous, on se sent plus léger, on a plus besoin de se
            cacher ou de mentir et c’est très soulageant.
            Le fait de se confier est un exercice qui se fait sans inquiétude et avec toute honnêteté.
            Mais qu’advient-t-il quand se confier devient peu rassurant?
          </p>
          <p>
            je me suis confié, mais à présent je me sens en insécurité..
            Ai-je fait un mauvais choix? Ai-je mal fait de sortir de ma coquille?
            Telles sont les types de questions que plusieurs personnes se posent.
          </p>
          <p>
            Avant de se confier, souvent on réfléchit beaucoup et plusieurs paramètres sont mis en jeu.
            Certains se confient uniquement parce que l’autre s’est d’abord confié, tandis que d’autres se
            confient uniquement parce que l’autre inspire confiance et son sens de jugement a tranché ainsi..
          </p>
          <p>
            Très chers lecteurs, sachez que dans le fait de se confier, la responsabilité revient non seulement
            à celui chez qui on se confie, mais aussi à celui qui se confie.
            Il est très capital de savoir pourquoi on se confie et aussi si on est en mesure
            de conserver la confiance qui nous est accordée.
          </p>

          <strong>
            A ceux qui veulent se confier, vous devez vous demander les questions suivantes :  »
            Pourquoi je veux me confier? est-ce réellement pour me décharger ou ce n’est qu’un maquillage..
            est-ce pour gagner de l’empathie ou le besoin de se libérer est vraiment urgent? «

          </strong>
          <p>
            On ne se confie pas pour gagner l’empathie ou pour se faire aimer. Pour se confier,
            on ne se dirige pas vers ce qui nous plait, on ne le fait pas par profit, mais on choisit en fonction
            de la maturité et de la stabilité émotionnelle de la personne.
          </p>
          <p>
            Egalement, il faut savoir qu’on ne se confie pas à tout le monde. Vous devez comprendre que tout
            le monde n’est pas obligé de connaitre votre vie, vos ressentis et vos peines. La raison pour laquelle
            beaucoup de gens se sentent en insécurité dans ce domaine c’est parce qu’ils se sont pratiquement
            confiés à tout leur entourage. Des choses qui normalement devraient rester clos ont été partagées à
            des gens peu digne de confiance, qui à leur tour ont vulgarisé la chose sans se rendre compte qu’il
            s’agissait d’un sujet sensible.
          </p>
          <p>
            Aux personnes chez qui on se confie, vous devez savoir que cela est une responsabilité entre vos épaules.
            Si vous n’êtes pas capable de gérer, il serait mieux d’y renoncer au risque de briser l’autre.
            Mettant de coté les divers raisons pour lesquels les gens décident de se confier, vous devez savoir que
            si le choix se porte sur vous, c’est parce que vous avez en vous, ce que l’autre n’a pas et que
            cette personne se sent certainement en sécurité auprès de vous.
          </p>
          <p>
            N’acceptez jamais d’écouter les secrets des autres si vous avez du mal à tenir votre langue.
            Une simple fuite de votre part pourrait détruire la personne bien plus que vous ne le pensez.
            N’acceptez pas qu’on vous fasse des confidences si vous voulez juste que les gens sachent que les
            gens viennent aussi vers vous.

          </p>
          <p>
            c’est un plaisir d’avoir quelqu’un sur qui compter et chez qui se confier. Le cœur a quelques fois
            besoin de s’exprimer.
            A la question de savoir si nous sommes en sécurité ou non, lorsque nous nous confions, ma réponse est
            oui si nous choisissons la bonne personne et si nous avons les bonnes motivations et non si nous tombons
            sur la mauvaise personne et si nos motivations sont malsaines.
          </p>
          <p>
            » La confiance, une fois détruite, détruit avec l’estime l’amour et avec l’amour la paix. »
            <br/>&mdash Citation de Henri-Frédéric Amiel ; Journal intime, le 27 octobre 1854
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
import confier from "@/assets/latest-image.jpg";

export default {
  name: 'confier-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      confier: confier
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>