<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5">
      Nous serons ravis de vous lire...
    </h1>
  </div>
  <div class="container">
    <div class="row d-flex flex-nowrap flex-column flex-md-row justify-content-center ">
      <div class="address col-md-6 mt-5 pt-3 col-12">
        <div class="row mt-3">
          <figure>
            <img :src="chypre" alt="chypre">
            <figcaption><p>Kyrenia, Chypre</p></figcaption>
          </figure>

        </div>
      </div>
      <div class=" col-md-6 mt-5 pt-3 message col-12 text-start font-monospace ">
          <!-- Formulaire -->
          <form class="row mt-3">
            <div class="col-6 my-2">
              <label for="firstname" class="form-label  fs-5">Prénom</label>
              <input name="firstname" type="text" class="form-control" id="firstname">
            </div>
            <div class="col-6 my-2">
              <label for="name" class="form-label fs-5">Nom</label>
              <input name="name" type="text" class="form-control" id="name">
            </div>
            <div class="col-12 my-2">
              <label for="email" class="form-label fs-5">Email address</label>
              <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="col-12 my-2">
              <label for="message" class="form-label fs-5">Message</label>
              <textarea name="message" class="form-control" id="message" rows="3"></textarea>
            </div>
            <div class="col-12 my-2">
              <button type="submit" class="btn btn-form w-100 fs-5">Envoyer</button>
            </div>
          </form>
          <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Successfully sent!</h3>
          </div>
          <div id="error_message"
               style="width:100%; height:100%; display:none; ">
            <h3>Error</h3>
            Sorry there was an error sending your message.
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