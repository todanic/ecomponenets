<template>
  <v-container fluid class="splash-container pa-0">
    <v-carousel
      ripple
      dark
      class="splash-container__carousel"
      fade
      cycle
      light
      height="500"
      hide-delimiter-background
      :show-arrows="false"
    >
      <v-carousel-item
        dark
        cover
        ba
        :src="image.src"
        v-for="(image, i) in images"
        :key="i"
      >
        <div class="splash-container__carousel-text">
          <h2 v-if="image.welcome">{{ image.welcome }}</h2>
          <h3>{{ image.description }}</h3>
        </div>
      </v-carousel-item>
    </v-carousel>
  </v-container>
</template>
<script>
export default {
  data: () => ({
    images: [
      {
        src: "/images/splash/1.webp",
        welcome: "Welcome to Ecomponents!",
        description: "13 years of experience"
      },
      { src: "/images/splash/2.webp", description: "Taylor made solutions" },
      {
        src: "/images/splash/3.webp",
        description: "Quick and reliable service"
      },
      {
        src: "/images/splash/4.webp",
        description: "Wide range of electronic components"
      },
      { src: "/images/splash/5.webp", description: "Quality guaranteed" },
      {
        src: "/images/splash/6.webp",
        description: "If you can imagine it, we can make it!"
      },
      { src: "/images/splash/7.webp", description: "Attention to details" }
    ]
  })
};
</script>
