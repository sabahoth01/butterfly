<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5">
      Nous serons ravis de vous lire...
    </h1>
  </div>
  <div class="container">
    <div class="row d-block justify-content-center  ">
      <div class=" my-3 pt-3 col-12">
        <div class="row mt-3">
          <ul>
            <li>
              <a href="mailto:kerenemat@gmail.com" class="fs-3">Cliquez pour envoyer un mail</a><br/>
            </li>
          </ul>
        </div>
        <div class="row mt-3">
          <figure>
            <img :src="chypre" alt="chypre">
            <figcaption><p>Kyrenia, Chypre</p></figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
  <Footer/>
</template>

<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";
import cyprus from '@/assets/cyprus.png';
import jQuery from "jquery";

const $ = jQuery;
window.$ = $;

export default {
  name: "Contact-content",
  components: {
    NavBar,
    Footer
  },
  data(){
    return{
      chypre: cyprus
    }
  }
}

</script>

<style scoped>

.btn-form{
  background-color: #174807;
  color: white;
}

.btn-form:hover{
  background-color: #fbcc65;
  color: black;
}

.form-control{
  border: 1px solid black;
}

</style>