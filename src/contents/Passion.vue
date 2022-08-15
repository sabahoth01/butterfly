<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-md-5 p-1 text-center">Soyons des passionnés !</h1>
    <div class="fontAwesome my-5 align-items-center"></div>
    <div class="container ">
      <div class="row g-md-3 g-2 m-md-5 m-1 d-flex flex-column flex-nowrap justify-content-center align-items-center">
        <div class="avatar p-md-5 p-1 ">
          <img :src="passion" alt="image-ceo" class="w-100">

        </div>
        <div class="about-ceo text-break p-md-5 p-1 text-start font-monospace fs-md-4 fs-5">
          <p>
            Aujourd’hui, vous pouvez être ce que vous voulez 🤗🤗🤗
            Avez-vous déjà pensé à quel rôle vous voulez jouer autour de vous ou quel titre vous voulez obtenir dans la vie?
            Quand bien même le système mondial nous impose un rythme, il y’a toujours cette liberté
            de faire les choses comme on veut.
            Nous avons la liberté, quand bien même nous pensons que non. La liberté de choisir
            quel genre de personne nous voulons être, quel genre d’ami nous voulons être et avoir et
            quel type de personne nous souhaitons devenir dans la société.

          </p>
          <p>
            La question maintenant c’est comment jouir pleinement de cette liberté ?
            Déjà que je ne sais même pas où la trouver.
          </p>
          <p>
            On a tous envie d’être heureux, d’être libre de choisir le métier de nos rêves,
            le pays où on veut finir notre vie, etc.
            Pour répondre à cette question, je dirai qu’il faut juste vivre chaque instant comme si c’était le
            dernier et s’investir avec joie et passion dans tout ce que nous faisons.
          </p>
          <p>
            Pour moi c’est ça la liberté. Le système mondial, la famille ou même notre église et notre boulot
            nous impose un rythme qui nous arrache presque notre liberté, et on se demande même quand est-ce
            qu’on pourrait nous aussi avoir notre mot à dire 🤷‍♀️🤷‍♂️
          </p>
          <p>
            Voilà pourquoi la solution c’est de vivre avec passion. Car la passion nous permet de nous
            évader dans notre monde à nous. Un monde où nous sommes maîtres, un monde où c’est nous qui dirigeons,
            un monde où nous sommes libre !
          </p>
          <p>
            N’attend pas que les choses s’arrêtent, que tu aies suffisamment des moyens, que tu changes de
            boulot ou que tu quittes ton pays. Car aussi longtemps que la terre sera entrain de tourner,
            les choses seront toujours telles qu’elles sont. On fera la course et on suivra le rythme que
            le monde nous impose.
            Là où tu te trouves en ce moment, évade-toi dans ta passion et ainsi, tu auras un sentiment de
            liberté quand bien même le monde te tyrannise..

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
import passion from "@/assets/passion.jpg";

export default {
  name: 'passion-content',
  components:{
    NavBar,
    Footer
  },
  data() {
    return{
      passion: passion
    }
  }
}
</script>

<style scoped>
p{
  text-align: justify;
}
</style>