<template>
<footer>
    <div class="container d-flex flex-column flex-nowrap">
        <div class=" d-flex flex-nowrap flex-row ">
            <div class="blog-name col-4 col-md-3">
              <p>
                <img :src="logo">
              </p>
            </div>
            <div class="links col-4 col-md-6 mt-5 py-2">
              <p>Info</p>
              <p>
                <router-link class="text-decoration-none "  to="/about">About</router-link><br/>
                <router-link class="text-decoration-none "  to="/contact">Contact</router-link>
                <a href="#" class="text-decoration-none " data-bs-toggle="modal"
                   data-bs-target="#accreditation"><br/>Accréditations
                </a>
              </p>
            </div>
            <div class="follow col-4 col-md-3 mt-5 p-2">
              <p>
                Suivez-nous:
              </p>
              <p>
                <a href="https://www.facebook.com/105229041160976/posts/122787856071761/?app=fbl"><i><font-awesome-icon icon="fa-brands fa-facebook-f" class="fa fa-facebook"/></i></a>
                <a href="https://www.youtube.com/channel/UCCOogdP_1fms8Z94ks3Rl_w"><i><font-awesome-icon icon="fa-brands fa-youtube" class="fa fa-youtube"/></i></a>
                <a href="https://www.instagram.com/invites/contact/?i=1k62uxiyahpcx&utm_content=fjtayl0"><i><font-awesome-icon icon="fa-brands fa-instagram" class="fa fa-instagram"/></i></a>
              </p>
            </div>
        </div>
      <div class="d-flex flex-row flex-nowrap container m-4">
        <div class="address col-6 text-md-start">
          <i>Kyrenia, Chypre</i>
        </div>
        <div class="copy col-6 text-md-end">
          <i>Butterfly &copy; Tous droits reservés.</i>
        </div>
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="accreditation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark">Accréditations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>
            Les images et illustrations utilisées dans ce site été téléchargées gratuitement:
          </p>

          <p>
            <a href='https://fr.freepik.com/photos/fleur-papillon'>Fleur papillon photo créé par wirestock - fr.freepik.com</a><br/>

            <a href='https://fr.freepik.com/photos/quarantaine'>Quarantaine photo créé par freepik - fr.freepik.com</a><br/>

            <a href='https://www.freepik.com/vectors/radio-studio'>Radio studio vector created by vector4stock - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/friends-laughing'>Friends laughing photo created by standret - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/girl-book'>Girl book photo created by lookstudio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/choice'>Choice photo created by wayhomestudio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/pleasure'>Pleasure photo created by wayhomestudio - www.freepik.com</a><br/>
            <a href='https://fr.freepik.com/photos/fleur-papillon'>Fleur papillon photo créé par wirestock - fr.freepik.com</a><br/>

            <a href='https://fr.freepik.com/photos/quarantaine'>Quarantaine photo créé par freepik - fr.freepik.com</a><br/>

            <a href='https://www.freepik.com/vectors/radio-studio'>Radio studio vector created by vector4stock - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/friends-laughing'>Friends laughing photo created by standret - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/girl-book'>Girl book photo created by lookstudio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/choice'>Choice photo created by wayhomestudio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/pleasure'>Pleasure photo created by wayhomestudio - www.freepik.com</a><br/>

            <a href="https://www.flaticon.com/free-icons/cyprus" title="cyprus icons">Cyprus icons created by Freepik - Flaticon</a><br/>

            <a href='https://www.freepik.com/photos/man-jogging'>Man jogging photo created by ArthurHidden - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/cool-guy'>Cool guy photo created by benzoix - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/smart-girl'>Smart girl photo created by cookie_studio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/target-3d'>Target 3d photo created by kjpargeter - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/stylish-woman'>Stylish woman photo created by cookie_studio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/pointing'>Pointing photo created by wayhomestudio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/pointing'>Pointing photo created by wayhomestudio - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/group-therapy'>Group therapy photo created by tonodiaz - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/unsure'>Unsure photo created by 8photo - www.freepik.com</a><br/>

            <a href='https://www.freepik.com/photos/woman-teacher'>Woman teacher photo created by creativeart - www.freepik.com</a><br/>

            <a href=''></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
</template>

<script>
import logo from "@/assets/tog.png"
export default {
  name: "Footer-bar",
  data() {
    return {
      logo: logo
    }
  }
}
</script>

<style scoped>
footer{
  color: white;
  background-color: rgb(7, 7, 7);
}

.fa {
  padding: 10px;
  font-size: 10px;
  width: 10px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #095efc;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #095EFCFF;
  color: white;
}

.links{
  text-decoration: none;
}
</style>