<template>
  <v-container fluid class="wire-harness-container pa-0">
    <v-parallax src="images/parallax.jpg">
      <v-container class="shrink-width">
        <v-row>
          <v-col class="text-center" lg="12" md="12" sm="12" cols="12" daTa-aos="fade-down" data-aos-delay="300" data-aos-easing="ease-in-out">
            <h2 class="mb-4">
              Wire and cable harnessing
            </h2>
          </v-col>
          <v-col lg="12" md="12" sm="12" cols="12" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
            <p>
              We offer our customers and partners in different industries
              tailor-made solutions in the field of wire harnesses. Home appliance
              industry, gaming and vending machines industry and many other rely
              on us to bring their designs to life. Be it a single wire or a
              complex wire harness system – we got you covered!
            </p>
          </v-col>
          <v-col lg="12" md="12" sm="12" cols="12" class="text-center" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
            <router-link to="/wires-and-harness">
              <v-btn outlined class="btn btn--blue btn--fill text--white" x-large rounded>
                Read more
              </v-btn>
            </router-link>
          </v-col>
        </v-row>
      </v-container>
    </v-parallax>
  </v-container>
</template>
<script>
  export default {
    name: 'WireAndHarnessComponent'
  }
</script>
