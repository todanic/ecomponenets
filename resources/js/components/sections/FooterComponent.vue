<template>
  <v-container fluid class="footer-container pt-3 pb-3 text-center">
    <p>© {{ copyright }} All Rights Reserved</p>
    <a target="_blank" href="https://www.linkedin.com/in/teodora-odanic-74205b173/">todanic</a>
  </v-container>
</template>
<script>
  export default {
    data: () => ({}),

    computed: {
      copyright: function () {
        return new Date().getFullYear();
      }
    }
  }
</script>