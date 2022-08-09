<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5 text-center">« Je choisis de réparer »</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-3 m-5 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-5 ">
          <img :src="reparer" alt="image-ceo" class="w-100">
          <!-- picture here<img :src="image-name" alt="image-cover" class="w-100"/>-->
        </div>
        <div class="about-ceo text-break p-5 text-start font-monospace fs-4">
          <p>
            Dans les relations humaines, la réparation est un signe d’amour et de considération.
            Il ne s’agit pas d’une obligation, mais plutôt d’une option. Et puisque c’est facultatif,
            lorsque quelqu’un prend la résolution de réparer, cela témoigne d’une considération énorme envers l’autre.
          </p>
          <p>
            e me rappelle avec mes amies, j’aimais beaucoup être aimée et appréciée. J’aimais être au centre de l’attention,
            et donc pour ça, je me fâchait de fois sans raison, juste par pur caprices. C’était vraiment très immature et très méchant de ma part.
            J’ai été à cause de ça, responsable du refroidissement de notre amitié. Et je le regrette énormément.
            Vous savez, l’amour est un lien puissant, mais, qui peut être rompu facilement par manque d’entretien.
          </p>
          <p>
            Aujourd’hui, je privilège la réparation dans toute mes relations, car j’ai compris qu’ avoir raison ne vaut
            pas plus que dire « je t’aime « . Et l’une de mes façons de dire « je t’aime  » c’est en réparant.
            Choisis l’amour, choisis de réparer même quand ce n’est pas toi le responsable. Il s’agit d’une très bonne thérapie
            pour avoir un coeur en paix.
            Aussi longtemps que cela dépendra de toi, choisis toujours la réparation.
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
import reparer from "@/assets/reparer.jpg";

export default {
  name: 'Reparer-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      reparer: reparer
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>