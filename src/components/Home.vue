<template>
  <div class="flex-container display__column">
    <div class="header">
      <img :src="cover" alt="cover" />
      <router-link to="/blog" class="blog">Aller au blog</router-link>
      <router-link to="/contact" class="contact">Discutons</router-link>
      <router-link to="/about" class="about">A propos</router-link>
    </div>

    <div class="latest display__row">
      <div class="post-intro">
        <h1>Sommes-nous en sécurité quand nous nous confions?</h1>
        <p>
          Je me suis confié, mais à présent, je me sens en insécurité…<br/>
          Ai-je fait un mauvais choix ? Ai-je mal fait de sortir de ma coquille ?<br/>
          Tels sont les types de questions que plusieurs personnes se posent...
        </p>
        <router-link to="/confier"><button>En savoir plus</button></router-link>
      </div>
      <div class="post-icon">
        <img src="" alt="post-image">
      </div>
    </div>
    <div class="about">
      <img src="" alt="">
      <div>
        <h1>
          Tout ce que tu veux est de l'autre côté de la peur.
        </h1>
        <p>
          Bienvenu dans le monde des possibilites!
        </p>
        <p>
          <router-link to="/about"><button>En savoir plus...</button></router-link>
        </p>
      </div>
    </div>
    <div class="cover">
      <h1>
        Être heureux est un choix!<br/>
      </h1>
      <blockquote>
        le changement est un processus à durée déterminé par<br/>
        la volonté qui accompagne chacune de nos intentions.<br/>
        &mdash; <cite>Keren Mat</cite>
      </blockquote>

    </div>
    <div class="podcast display__row">
      <div class="podcast-intro">
        <p>
          Les podcasts de Keren Mat sont des sujets pertinents et constructifs<br/>
          qui t’aideront dans ta vie de chaque jour !<br/>
          <i>Le bon Message au bon moment, peut tout changer !</i>
        </p>
        <p>
          <router-link to="/podcast"><button>Écouter</button></router-link>
        </p>
      </div>

      <div class="podcast-icon">
        <img src="" alt="podcast-pic">
      </div>
    </div>
    <div class="quotes display__row">
      <div>
        <img src="" alt="citation-image">
        <blockquote>
          La meilleure manière de commencer est d’arrêter de discuter et de commencer à faire.<br/>
          &mdash; <cite>WALT DISNEY</cite>
        </blockquote>
      </div>
      <div>
        <img src="" alt="citation-image">
        <blockquote>
          Ce sont nos choix, Harry, qui montrent ce que nous sommes vraiment, bien plus que nos capacités.<br/>
          &mdash; <cite>J.K. ROWLING</cite>
        </blockquote>
      </div>
      <div>
        <img src="" alt="citation-image">
        <blockquote>
          Ne pleurez pas parce que c’est fini, souriez parce que c’est arrivé.<br/>
          &mdash; <cite>DR. SEUSS</cite>
        </blockquote>
      </div>
      <div>
        <img src="" alt="citation-image">
        <blockquote>
          Être heureux, c’est un choix. C’est ton choix !<br/>
          &mdash; <cite>KEREN MAT</cite>
        </blockquote>
      </div>
    </div>
    <div class="other-post">
      <div class="post-intro">
        <h1>Sommes-nous en sécurité quand nous nous confions?</h1>
        <p>
          Je me suis confié, mais à présent, je me sens en insécurité…<br/>
          Ai-je fait un mauvais choix ? Ai-je mal fait de sortir de ma coquille ?<br/>
          Tels sont les types de questions que plusieurs personnes se posent...
        </p>
        <router-link to="/confier"><button>En savoir plus</button></router-link>
      </div>
      <div class="post-icon">
        <img :src="post-icon" alt="post-image">
      </div>
    </div>
  </div>
</template>

<script>
import pic1 from '@/assets/cover.jpg'
export default {
  name: 'Home-content',
  data(){
    return {
      cover: pic1
    }
  }
}
</script>

<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
img{
  width: 100%;
  height: 90%;
}
</style>
