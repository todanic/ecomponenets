<template>
  <v-container fluid class="splash-container pa-0">
    <v-carousel
        ripple
      dark class="splash-container__carousel"
      fade
      cycle
      light
      height="600"
      hide-delimiter-background
      :show-arrows="false">
      <v-carousel-item :src="image.src" v-for="(image, i) in images" :key="i">
      </v-carousel-item>
    </v-carousel>
  </v-container>
</template>
<script>
  export default {
    data: () => ({
      images: [
        {src: '/images/splash/splash2.jpg'},
        {src: '/images/splash/splash3.jpeg'},
        {src: '/images/splash/splash4.jpeg'},
        {src: '/images/splash/splash5.jpg'},
        {src: '/images/splash/splash6.jpg'},
        {src: '/images/splash/splash7.jpg'},
      ],
    }),
  }
</script>
