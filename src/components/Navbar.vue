<template>
  <!--navbar -->
  <div class="nav d-flex flex-row flex-nowrap justify-content-center align-items-center container-fluid  sticky-top banner">
    <div class="toggler col-2 ms-md-5 ms-2 ps-2  ps-md-5">

      <button class=" elementor-btn btn float-start ms-2 ps-2 fs-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
        <i class="fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"><font-awesome-icon icon="fa-brands fa-elementor" /></i>
      </button>

      <!-- Slide menu -->
      <div class="row offcanvas offcanvas-start p-md-5 w-auto" data-bs-scroll="true" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset text-danger" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body  px-0 ">
          <div class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
            <router-link class="nav-link " to="/">
              <span class="ms-1 ">HOME</span>
            </router-link>
            <router-link class="nav-link " to="/blog">
              <span class="ms-1 ">BLOG</span>
            </router-link>
            <router-link class="nav-link " to="/contact">
              <span class="ms-1 ">CONTACT</span>
            </router-link>
            <router-link class="nav-link " to="/podcast">
              <span class="ms-1 ">PODCAST</span>
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
</template>

<script>

export default {
  name: 'Nav-bar'
};
</script>

<style scoped>
*{
  font-family: "Times New Roman","Lucida Bright", Avenir, Helvetica, Arial, sans-serif;
}

.offcanvas{
  background-color: #fdcd65;

}

.banner{
  height:15vh;
  background-color: #174807;
}
.name{
  flex: 40%;
  font-size: 25px;
  color: #fdcd65;

}
.toggler{
  flex: 30%;
}
.about{
  flex: 30%;
}
.elementor-btn{
  background-color: transparent;
}
@media screen and (max-device-width: 700px) {
  .body-text{
    font-size: 18px;
  }

  .name{
    flex: 40%;
    font-size: 20px;
    color: #1a2303;

  }
  .titles{
    font-family: "Arial Rounded MT Bold",monospace;
    font-weight: bold;
    font-size: 29px;
  }


}
</style>
