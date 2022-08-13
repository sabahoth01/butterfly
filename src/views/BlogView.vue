<template>
  <div class="blog">
    <Blog />
  </div>
</template>

<script>
// @ is an alias to /src
import Blog from '@/components/Blog.vue'

export default {
  name: 'BlogView',
  components: {
    Blog
  }
}
</script>
<style>

</style>