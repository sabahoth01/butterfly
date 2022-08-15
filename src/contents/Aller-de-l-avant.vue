<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-md-5 p-1 text-center">Aller de l'avant en faisant des bons choix</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1 ">
          <img :src="image" alt="image-ceo" class="w-100" />
        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <p>
            ’Aller de l’avant’, c’est un choix que nous faisons lorsque nous ressentons le désir d’avancer
            et d’arrêter de stagner.
            Dans cette démarche, on pourrait se poser beaucoup de questions, et toutes ces questions toutes
            aussi différentes les unes des autres, se résument en « comment faire pour ? ».
          </p>
          <p>
            Oui vous me dites d’aller de l’avant, mais comment vais-je m’y prendre ?
            Je dois abandonner cette activité, car elle ne me produit plus suffisamment de bénéfices,
            je dois changer de boulot parce qu’ici je ne suis plus bien payé, je dois quitter mon époux (épouse),
            car il (elle) ne me correspond plus, …
            Toute cette série de décisions, de résolutions que beaucoup d’entre nous prenons lorsque nous entreprenons
            la démarche d’aller de l’avant, accuse un désir de changement qui a tout simplement besoin d’être exprimé.
            Bien sûr, certains ne vont pas par quatre chemins et mettent directement en exécution leur décision,
            mais d’autres cependant se penchent dans une série de questionnement pour parvenir à trancher quelle serait
            la meilleure issue.
          </p>
          <p>
            De là, nous comprenons donc que c’est une question de choix. Choisir ce qui serait excellent pour nous est parfois
            difficile!
            Les bons choix nous permettent d’aller de l’avant et de ne pas rétrograder. Et un bon choix, résulte d’une bonne
            décision.
            De même Une seule mauvaise décision prise pour n’importe quel domaine de la vie pourrait être fatal pour notre destiné,
            De même une seule bonne décision peut catalyser la réussite de toute une vie.
            En matière de choix, l’homme a souvent tendance à prendre ce qui frappe à l’œil, soit ce qui semble plus facile, et qui
            demande moins de sacrifice.
          </p>
          <p>
            Après un moment de tristesse, de peine, ou d’échec, on se pose souvent la question suivante : « que vais-je faire
            maintenant ? »
            Aujourd’hui la réponse à cette question c’est aller de l’avant en faisant des bons choix. Oui cette réponse
            est vraiment
            simple, mais la question surtout comme je l’ai dit au départ c’est comment savoir quand c’est un bon choix et
            quand ça ne l’est pas.
            Pour un nouveau étudiant qui se rend à l’université et qui a besoin d’aide pour le choix d’une filière, comment
            saura-t-il que la médicine est un bon choix pour lui et pas le droit par exemple ? pour un agent, père de famille,
            comment saura-t-il que rester travailler dans sa ville serait bon pour lui et sa famille,
            que d’accepter d’être affecté hors de sa ville, et loin de sa famille ?
          </p>
          <p>Retenons : « les bons choix ne sont pas faits en fonction de la beauté, ou en fonction de ce qu’ils rapportent »
            « Les bons choix sont faits en fonction d’un profil. »
            De même un pentalon de taille 26, aussi beau qu’il soit n’irait pas à quelqu’un qui fait du 36, de même un homme qui
            fait un choix qui ne correspond pas à son profil se dirige tout droit vers un fossé d’échec, de déception ou
            d’insatisfaction continue.
            il faudrait donc que chacun de nous se connaisse, sache ce qui lui correspond aisément, qu’est-ce qui le caractérise,
            quelles sont ses points forts et ses points faibles, quelles sont ses atouts, et en fonction de la connaissance
            de ces détails, on parvient à faire un bon choix.
          </p>
          <p>
            Quand tu fais le choix d’aller de l’avant, c’est excellent! mais il faut veiller à ce que le bagage que tu choisis
            de transporter soit utile pour ton parcours. Si non tu porteras beaucoup de poids pour rien, tu vas te ralentir et
            t’épuiser inutilement.
            Les bonnes décisions nous facilitent la vie. Elles sont souvent dure à prendre, mais elles nous font beaucoup de bien.
            N’oublie pas ! une seule bonne décision aujourd’hui, pour l’épanouissement de toute une vie.
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
import image from "@/assets/faire.jpg";

export default {
  name: 'Aller-de-l-avant',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      image: image
    }
  }
}
</script>

<style scoped>
p {
  text-align: justify;
}
</style>

