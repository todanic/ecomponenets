<template>
  <v-container fluid class="contact-container">
    <v-container>
      <v-row>
        <v-col cols="12" class="text-center" daTa-aos="fade-down" data-aos-delay="100" data-aos-easing="ease-in-out">
        <h2 class="mb-5">Have <span>questions?</span></h2>
        </v-col>
        <v-col cols="12" class="text-center">
          <router-link class="prefooter-block-link" to="/contact-us">
            <v-btn outlined class="home-contact-btn" x-large rounded>Contact us</v-btn>
          </router-link>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>

export default {
  name: 'HomeContactComponent'
  
}
</script>