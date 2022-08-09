<template>
  <NavBar/>
  <div class="container-fluid">
    <h1 class="my-5 p-5">
      Blog
    </h1>
  </div>
  <div class="container align-self-center d-flex flex-wrap flex-column
    flex-md-row  justify-content-center align-items-center">
    <div class="card">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>


    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>


    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>


    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>


    <div class="card col-md-4 col-lg-3 col-sm-6">
      <img :src="cover" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <Footer/>

</template>

<script>
import NavBar from "@/components/Navbar";
import Footer from "@/components/Footer";
import cover from '@/assets/heureux.jpg'
export default {
  name: "Blog-content",
  components: {
    NavBar,
    Footer
  },

  data(){
    return{
      cover:cover
    }
  }

}
</script>

<style scoped>
.card{
  margin: 0.8%;
  flex: 24%;
}
</style>