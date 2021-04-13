<template>
  <v-container fluid class="contact-container">
    <v-container>
      <v-row>
        <v-col
          cols="12"
          class="text-center"
          daTa-aos="fade-down"
          data-aos-delay="100"
          data-aos-easing="ease-in-out"
        >
          <h2 class="mb-5">
            {{ $t("contact-fixed.title.text") }}
            <span>{{ $t("contact-fixed.title.span") }}</span>
          </h2>
        </v-col>
        <v-col cols="12" class="text-center">
          <LocalizedLink to="/contact-us"
            ><v-btn
              outlined
              class="btn btn--fill btn--blue text--white"
              x-large
              rounded
              >{{ $t("contact-fixed.button") }}</v-btn
            ></LocalizedLink
          >
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>
import LocalizedLink from "../LocalizedLink";
export default {
  components: { LocalizedLink },
  name: "HomeContactComponent",
};
</script>
