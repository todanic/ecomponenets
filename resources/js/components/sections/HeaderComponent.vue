<template>
  <v-container fluid class="header-container">
    <v-container class="shrink-width">
      <div class="language-selector">
        <select :value="$i18n.locale" @change.prevent="changeLanguage">
          <option
            :value="locale.code"
            v-for="locale in locales"
            :key="locale.code"
          >
            {{ locale.name }}
          </option>
        </select>
      </div>

      <v-row class="align-center">
        <v-col
          class="d-flex justify-center pa-0"
          lg="12"
          md="12"
          sm="12"
          cols="12"
        >
          <v-img
            max-width="150px"
            src="/images/logo-full.png"
            alt="logo"
          ></v-img>
        </v-col>
        <v-col
          :class="{
            'pt-6': !$vuetify.breakpoint.xs,
            'text-right pt-0 pb-0': $vuetify.breakpoint.xs,
          }"
          lg="12"
          md="12"
          sm="12"
          cols="12"
        >
          <MenuComponent></MenuComponent>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>

<script>
import { getSupportedLocales } from "../../util/i18n/supported-locales";
import MenuComponent from "../MenuComponent";

export default {
  components: { MenuComponent },
  data: () => ({
    defaultLanguage: null,
    locales: getSupportedLocales(),
    lang: "sr",
  }),
  methods: {
    changeLanguage(e) {
      const locale = e.target.value;
      this.$i18n.locale = locale;
      this.$store.commit("changeLanguage", locale);
      this.lang = locale;
      this.$router.push(`/${locale}`);
    },
  },
};
</script>
