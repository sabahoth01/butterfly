<template>
  <NavBar/>
  <div className="container-fluid">
    <h1 className="my-5 p-5 text-center">Les choix</h1>
    <div className="fontAwesome my-5 align-items-center"></div>
    <div className="container ">
      <div className="row g-3 m-5 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div className="avatar p-5 ">
          <img :src="choix" alt="image-ceo" class="w-100">
          <!-- picture here<img :src="image-name" alt="image-cover" class="w-100"/>-->
        </div>
        <div className="about-ceo text-break p-5 text-start font-monospace fs-4">
          <strong>
            La capacité à prendre des décisions importantes même dans les moments les plus tumultueux est un vrai atout.

            <br/>&mdash KEREN MAT.
          </strong>
          <p>
            Savoir faire le choix sur quand il faut dire oui, ou quand il faut dire non, savoir décider quand il faut y
            aller
            ou quand il faut rester, quand il faut prendre ou quand il faut laisser, constitue un challenge. Un
            challenge auquel
            nous faisons face au quotidien.
            La question aujourd’hui est : » Comment relever ce challenge 🤔🤔🤔? «
            Faut-il se fier à son instinct ou il en faut bien plus pour faire un bon choix. 🤷‍♀️🤷‍♀️
          </p>
          <p>
            Ma réponse à cette question est la suivante👇 :
            Tout part de nos intentions. Car un acte posé avec une mauvaise intention n’a pas de bon avenir!
            Je dis cela car pour moi, nos intentions sont comme une source. Et vous serez d’accord avec moi
            qu’une source amer n’est rien d’autre qu’un poison…
            Donc pour être sûr de faire un bon choix, il faut veiller sur ses intentions d’abord, car elles comptent et
            influencent beaucoup.
            Je ne dis pas que c’est la seule meilleure façon de faire des bons choix. Loin de moi cette idée! J’aimerais
            juste nous pousser à
            considérer ce point à chaque fois que nous serons appelés à faire un choix important.
          </p>
          <p>
            La vie est faite de choix. C’est en faite une série de choix! Et comme je le dis souvent, un seul bon choix
            peut changer toute une vie.
            Et un seul mauvais choix également peut détruire toute une vie...
          </p>

          <div className=" d-block author m-5 p-3 fs-5 text-end">
            <i>
              &mdash; <cite>Keren Matondo</cite>
            </i>
          </div>
        </div>
      </div>
    </div>
    <div className="fontAwesome my-5 align-items-center"></div>
  </div>
  <Footer/>
</template>


<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";
import choix from "@/assets/choix.jpg";

export default {
  name: 'Choix-content',
  components: {
    NavBar,
    Footer
  },
  data() {
    return {
      choix: choix
    }
  }
}
</script>

<style scoped>
p {
  text-align: justify;
}
</style>