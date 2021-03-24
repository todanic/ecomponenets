<template>
  <v-container fluid class="prefooter-container pa-0 ma-0">
    <v-container class="shrink-width">
      <v-row class="d-flex justify-center">
        <v-col lg="6" md="6" sm="12" cols="12">
          <h3>{{ $t("prefooter.title-left") }}</h3>
          <ul class="prefooter-container__block pa-0">
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/wholesale/wires-cables"
                >{{ $t("prefooter.links-left.wires-cables") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/wholesale/connectors"
                >{{ $t("prefooter.links-left.connectors") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/wholesale/pcbs"
                >{{ $t("prefooter.links-left.pcb") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/wholesale/led"
                >{{ $t("prefooter.links-left.led") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/wholesale/cable-accessories"
                >{{ $t("prefooter.links-left.cables") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/wholesale/hardware"
                >{{ $t("prefooter.links-left.harware") }}</LocalizedLink
              >
            </li>
          </ul>
        </v-col>
        <v-col lg="4" md="6" sm="12" cols="12">
          <h3>{{ $t("prefooter.title-right") }}</h3>
          <ul class="prefooter-container__block pa-0">
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/contact-us"
                >{{ $t("contact-fixed.button") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/about-us"
                >{{ $t("nav.about-us") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/gallery"
                >{{ $t("nav.gallery") }}</LocalizedLink
              >
            </li>
            <li>
              <LocalizedLink
                class="prefooter-container__block-link"
                to="/wires-and-harness"
                >{{ $t("nav.wires-and-harness") }}</LocalizedLink
              >
            </li>
          </ul>
          <router-link to="/">
            <v-img
              max-width="200px"
              class="mt-6"
              src="/images/logo-name.png"
            ></v-img>
          </router-link>
        </v-col>
        <v-col
          class="text-center prefooter-container__social-links"
          lg="12"
          md="12"
          sm="12"
          cols="12"
        >
          <a
            class="mr-2"
            target="_blank"
            href="https://instagram.com/ecomponentsdoo?igshid=1laai7c68an6d"
          >
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a
            target="_blank"
            href="https://www.facebook.com/EComponents-108169840984289/?modal=admin_todo_tour"
          >
            <i large class="fa fa-facebook-square" aria-hidden="true"></i>
          </a>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>
import LocalizedLink from "../LocalizedLink";

export default {
  components: { LocalizedLink },
  data: () => ({}),
};
</script>
