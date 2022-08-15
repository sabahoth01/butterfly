<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-md-5 my-1 p-md-5 p-1">
      A propos
    </h1>
  </div>
  <div class="container ">
    <div class="d-block align-items-center mx-md-5 mx-1 text-start p-md-3 p-1 font-monospace fs-md-4 fs-5">
      <span class="ps-5 fw-bold text-primary">Grow and arise</span> est un Univers mis en place afin de communiquer au monde que peu importe
      ce par quoi nous passons, nous sommes capables de les transformer à notre avantage.
      <p class="mt-4">
        <span class="ps-5">Prenant</span> example d’un papillon, cet animal si admiré qui n’est rien d’autre que le produit
        des transformations d’une chenille, animal négligé au premier abord pour ensuite devenir ce si beau petit animal
        que tout le monde admire, nous pouvons nous aussi tirer le meilleur de ce qui nous arrive.
      </p>
      <div class="ceo my-5 fs-3 text-center">
        <router-link to="/ceo">
          <strong>Faites connaissance avec Keren Mat...</strong>
        </router-link>
      </div>
    </div>
    </div>

  <Footer/>
</template>

<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";

export default {
  name: "About-content",
  components: {
    NavBar,
    Footer
  }

}
</script>

<style scoped>

</style>