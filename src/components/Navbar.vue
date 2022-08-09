<template>
  <div class="nav d-flex flex-row flex-nowrap justify-content-center align-items-center container-fluid  sticky-top banner">
    <div class="toggler ms-5 ps-5">

      <button class="btn float-start ms-4 ps-4 bg-black fs-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
        <i class="bi bi-arrow-right-square-fill  fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
      </button>

      <!-- Slide menu -->
      <div class="offcanvas offcanvas-start p-5 w-auto" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
          <div class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
            <router-link class="nav-link text-truncate" to="/">
              <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">HOME</span>
            </router-link>
            <router-link class="nav-link text-truncate" data-bs-toggle="collapse" to="/about">
              <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">ABOUT</span>
            </router-link>
            <router-link class="nav-link text-truncate" to="/blog">
              <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">BLOG</span>
            </router-link>
            <router-link class="nav-link text-truncate" to="/contact">
              <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">CONTACT</span>
            </router-link>
            <router-link class="nav-link text-truncate" to="/podcast">
              <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">PODCAST</span>
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
  background-color: #cfef92;
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

</style>
