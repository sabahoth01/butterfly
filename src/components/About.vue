<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5">
      A propos
    </h1>
  </div>
  <div class="container ">
    <div class="d-block align-items-center mx-5 text-start p-3 font-monospace fs-4">
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