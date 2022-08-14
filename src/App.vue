<template>
  <router-view/>
</template>

<script>

export default {
  name: 'App',
  components: {
  }
};

</script>

<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

/* Scroll bar customized */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px #ffffff;
  border-radius: 20px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #fdcd65;
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #174807;
}

*{
  overflow-x: hidden;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
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

@media  screen and (min-device-width: 900px) {
  .quotes-content{
    flex: 22%;
    margin: 0.8%;
  }
}
</style>
