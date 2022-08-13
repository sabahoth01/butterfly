<template>

  <div class="header container-fluid"
       :style="{'background-image':'url('+cover+')'}">
    <div class="row header-text-overlay d-flex flex-column flex-nowrap justify-content-center align-items-center">
      <div class="col-12 motto text-break"><h1>Grow and arise with Keren Mat!</h1></div>
      <div class="blog mt-5 col-12"><router-link to="/blog" class="blog"><button>LE BLOG</button></router-link></div>
    </div>
  </div>


  <!--navbar -->
  <div class="nav d-flex flex-row flex-nowrap justify-content-center align-items-center container-fluid  sticky-top banner">
    <div class="toggler col-2 ms-5 ps-5">

      <button class=" btn float-start ms-2 ps-4 bg-black fs-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
        <i class="bi bi-arrow-right-square-fill  fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
      </button>

      <!-- Slide menu -->
      <div class="row offcanvas offcanvas-start p-5 w-25" data-bs-scroll="true" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body  px-0 ">
          <div class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
            <router-link class="nav-link text-truncate" to="/">
              <span class="ms-1 d-none d-sm-inline">HOME</span>
            </router-link>
            <router-link class="nav-link text-truncate" to="/blog">
              <span class="ms-1 d-none d-sm-inline">BLOG</span>
            </router-link>
            <router-link class="nav-link text-truncate" to="/contact">
              <span class="ms-1 d-none d-sm-inline">CONTACT</span>
            </router-link>
            <router-link class="nav-link text-truncate" to="/podcast">
              <span class="ms-1 d-none d-sm-inline">PODCAST</span>
            </router-link>
          </div>
        </div>
      </div>
    </div>
    <div class="name col-4 text-center align-items-center fw-bold ">BUTTERFLY</div>
    <div class="about col-5">
      <router-link to="/about">
        <font-awesome-icon icon="fa-solid fa-id-card" class="text-black fs-4"/>
      </router-link>
    </div>
  </div>


  <!-- main menu -->
  <div class=" container-fluid d-flex p-2 flex-column ">
    <!-- intro -->
    <div class="reveal d-block mt-5 py-5 col-12 text-break text-center">
      <hr class="tiret" />
      <p class="titles">
        Être heureux est un choix!<br/>
      </p>
      <p class="body-text">
        le changement est un processus dont la durée est déterminée par<br/>
        la volonté qui accompagne chacune de nos intentions.<br/>
        &mdash; <cite>Keren Mat</cite>
      </p>
    </div>

    <!--Latest post -->
    <div class="my-5 p-4 row g-3 latest d-flex flex-md-row flex-column flex-nowrap align-items-center overflow-hidden ">
      <div class="postImg reveal fade-left col-md-5 col-12">
        <img :src="latest" alt="post-image">
      </div>
      <div class=" reveal postIntro col-md-6 offset-1 col-12 bg-light p-2">
        <hr class="tiret" />
        <p class="titles">Sommes-nous en sécurité quand nous nous confions?</p>
        <p class="body-text">
          Je me suis confié, mais à présent, je me sens en insécurité…<br/>
          Ai-je fait un mauvais choix ? Ai-je mal fait de sortir de ma coquille ?<br/>
          Tels sont les types de questions que plusieurs personnes se posent...
        </p>
        <p class="p-3">
          <router-link  to="/confier">
            <button class="">
              Lire...
            </button>
          </router-link>
        </p>
      </div>
    </div>

    <!-- Podcast -->
    <div class="my-5 p-2 row g-3 podcast d-flex flex-md-row flex-column flex-nowrap align-items-center">
      <div class="podcastIntro col-md-4 reveal col-12 ">
        <p class="body-text text-break pt-5 mt-5 text-podcast">
          Les podcasts de Keren Mat sont des sujets pertinents et constructifs
          qui t’aideront dans ta vie de chaque jour !<br/>
          <i>Le bon Message au bon moment, peut tout changer !</i>
        </p>
        <p class="p-3">
          <router-link  to="/podcast">
            <button class="">
              Ecouter...
            </button>
          </router-link>
        </p>
      </div>
      <div class="podcastImg reveal fade-right col-md-7 offset-md-1 col-12">
        <img :src="podcast" alt="podcast-pic">
      </div>
    </div>

    <!-- quotes -->
    <div class="quotes row reveal fade-bottom my-5 p-4 d-flex flex-nowrap flex-md-row flex-column g-3">
      <div class="quotes-content  col-md-3 col-12 ">
        <img :src="doing" alt="citation-image" class="">
        <blockquote class="p-2 bg-black bg-opacity-50 top-0 position-absolute h-100 w-100">
          <p class="body-text quote-text position-relative">
            La meilleure manière de commencer est d’arrêter de discuter et de commencer à faire.<br/>
            &mdash; <cite>WALT DISNEY</cite>
          </p>
        </blockquote>
      </div>
      <div class="quotes-content col-md-3 col-12">
        <img :src="choice" alt="citation-image">
        <blockquote class=" p-2 bg-black bg-opacity-50  top-0 position-absolute h-100 w-100 ">
          <p class="body-text quote-text position-relative">
            Ce sont nos choix, Harry, qui montrent ce que nous sommes vraiment, bien plus que nos capacités.<br/>
            &mdash; <cite>J.K. ROWLING</cite>
          </p>
        </blockquote>
      </div>
      <div class="quotes-content col-md-3 col-12">
        <img :src="smile" alt="citation-image">
        <blockquote class=" p-2 bg-black bg-opacity-50 top-0 position-absolute h-100 w-100">
          <p class="body-text quote-text position-relative">
            Ne pleurez pas parce que c’est fini, souriez parce que c’est arrivé.<br/>
            &mdash; <cite>Dr. SEUSS</cite>
          </p>
        </blockquote>
      </div>
    </div>

    <!-- other post -->
    <div class="my-5 row g-3 p-4 other-post d-flex flex-md-row flex-nowrap flex-column align-items-center">
      <div class="postImg reveal fade-left col-md-5  col-12">
        <img :src="passion" alt="post-image">
      </div>
      <div class="reveal postIntro col-md-6 offset-1 col-12 bg-light p-2">
        <hr class="tiret" />
        <p class="titles">Soyons des passionnés !</p>
        <p class="body-text">
          Avez-vous déjà pensé à quel rôle vous voulez jouer autour de vous?<br/>
          ou quel titre vous voulez obtenir dans la vie...?<br/>
        </p>
        <p class="p-3">
          <router-link  to="/confier">
            <button class="">
              Lire...
            </button>
          </router-link>
        </p>
      </div>
    </div>
  </div>
  <div class="footer container-fluid "
       :style="{'background-image':'url('+happy+')'}">
    <div class="footer-text-overlay row d-flex flex-column flex-nowrap h-100 w-100 justify-content-center align-items-center">
      <div class="reveal motto text-break bg-black opacity-50 p-3">
          <h1>
          Être heureux, c’est un choix.<br/>C’est ton choix !<br/>
          &mdash; <cite>KEREN MAT</cite>
        </h1>
      </div>
    </div>
  </div>
  <Footer/>
</template>

<script>
import Footer from '@/components/Footer'
import pic1 from '@/assets/bac.png'
import logo from '@/assets/log.png'
import latest from '@/assets/latest-image.jpg'
import mat from '@/assets/latest-image.jpg'
import postIcon from '@/assets/latest-image.jpg'
import happy from '@/assets/heureux.jpg'
import choice from '@/assets/choix.jpg'
import doing from '@/assets/faire.jpg'
import podcast from '@/assets/podcast.jpg'
import smile from '@/assets/smile.jpg'
import passion from '@/assets/passion.jpg'

export default {
  name: 'Home-content',
  components:{ Footer},
  data(){
    return {
      cover: pic1,
      logo : logo,
      latest: latest,
      podcast: podcast,
      mat: mat,
      postIcon: postIcon,
      choice: choice,
      doing: doing,
      happy: happy,
      passion: passion,
      smile: smile
    }
  }
}

</script>

<style scoped>
*{
  font-family: "Times New Roman","Lucida Bright", Avenir, Helvetica, Arial, sans-serif;
}

.offcanvas{
  background-color: #1a2303;
}


img{
  width: 100%;
  height: 100%;
}

.motto{
  font-weight: bolder;
}
.banner{
  height:15vh;
  background-color: #fdcd65;
}
.name{
  flex: 40%;
  font-size: 25px;
  color: #1a2303;

}
.toggler{
  flex: 30%;
}
.about{
  flex: 30%;
}

.titles{
  font-family: "Arial Rounded MT Bold",monospace;
  font-weight: bold;
  font-size: 35px;
}
.body-text{
  font-size: 23px;
}
.postIntro{
  flex: 60%;
}
.postImg{
  flex: 40%;
}
 .podcastIntro{
  flex: 45%;
}
 .podcastImg{
  flex: 55%;
}
.text-podcast{
  padding-top: 3%;
}
.quotes-content {
  position: relative;
  top: 0;
  left: 0;
  width:100%;
  color:white;

}

@media  screen and (min-device-width: 900px) {
  .quotes-content{
    flex: 22%;
    margin: 0.8%;
  }
}

.quote-text {
  top: 35%;
  text-align: center;
}

.tiret{
  border: 3px solid black;
  width: 8vw;
  left: 45%;
  background-color: black;
  position: relative;
}
.header, .footer{
  position: relative;
  min-height: 85vh;
  background-size: cover;
  color: white;
}
.header-text-overlay{
  position: absolute;
  width: 100%;
  height: 100%;
  padding-left: 20%;
}

.footer-text-overlay{
  position: absolute;
  width: 100%;
  height: 100%;
  color: #eefd01;
}

button {
  background-color: #fdcd65;
  border: none;
  color: white;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  font-weight: bold;
  margin: 2px 1px;
  transition-duration: 0.4s;
  cursor: pointer;
}

button {
  background-color: white;
  color: #1a2303;
  border: 2px solid #fdcd65;
  border-radius: 4px;
}

button:hover {
  background-color: #fdcd65;
  color: #070707;
}

.reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 2s all ease;
}
.reveal.active{
  transform: translateY(0);
  opacity: 1;
}

.active.fade-bottom {
  animation: fade-bottom 1s ease-in;
}
.active.fade-left {
  animation: fade-left 1s ease-in;
}

.active.fade-right {
  animation: fade-left 1s ease-in;
}

@keyframes fade-bottom {
  0% {
    transform: translateY(50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
@keyframes fade-left {
  0% {
    transform: translateX(-100px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
@keyframes fade-right {
  0% {
    transform: translateX(100px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

</style>
