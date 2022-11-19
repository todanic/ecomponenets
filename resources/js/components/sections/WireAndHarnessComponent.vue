<template>
  <v-container fluid class="wire-harness-container pa-0">
    <v-parallax height="100%" src="/images/parallax.jpg">
      <v-container class="shrink-width">
        <v-row>
          <v-col
            class="text-center"
            lg="12"
            md="12"
            sm="12"
            cols="12"
            daTa-aos="fade-down"
            data-aos-delay="300"
            data-aos-easing="ease-in-out"
          >
            <h2 class="mb-4">
              {{ $t("nav.wires-and-harness") }}
            </h2>
          </v-col>
          <v-col
            lg="12"
            md="12"
            sm="12"
            cols="12"
            daTa-aos="fade-down"
            data-aos-delay="400"
            data-aos-easing="ease-in-out"
          >
            <p>
              {{ $t("wire-and-cable-harness.description") }}
            </p>
          </v-col>
          <v-col
            lg="12"
            md="12"
            sm="12"
            cols="12"
            class="text-center"
            daTa-aos="fade-down"
            data-aos-delay="400"
            data-aos-easing="ease-in-out"
          >
            <LocalizedLink
              class="prefooter-container__block-link"
              to="/wires-and-harness"
            >
              <v-btn
                outlined
                class="btn btn--blue btn--fill text--white"
                x-large
                rounded
              >
                {{ $t("wire-and-cable-harness.button") }}
              </v-btn>
            </LocalizedLink>
          </v-col>
        </v-row>
      </v-container>
    </v-parallax>
  </v-container>
</template>
<script>
import LocalizedLink from "../LocalizedLink";
export default {
  components: { LocalizedLink },
  name: "WireAndHarnessComponent"
};
</script>
