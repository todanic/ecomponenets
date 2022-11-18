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
          class="d-flex align-center pa-0 header-logo-container"
          lg="12"
          md="12"
          sm="12"
          cols="12"
        >
          <LocalizedLink class="home-logo-link" to="/">
            <v-img
              max-width="100px"
              src="/images/logo-full.png"
              alt="logo"
              class="header-logo"
            ></v-img>
            <v-img
              class="mt-2"
              max-width="130px"
              src="/images/logo-name.png"
              alt="logo"
            ></v-img>
          </LocalizedLink>
        </v-col>
        <v-col
          :class="{
            'text-right pt-0 pb-0': $vuetify.breakpoint.xs
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
    <a class="header-container--mail" href="mailto:ecomponentsdoo@gmail.com"
      >ecomponentsdoo@gmail.com</a
    >
  </v-container>
</template>

<script>
import { getSupportedLocales } from "../../util/i18n/supported-locales";
import LocalizedLink from "../LocalizedLink";
import MenuComponent from "../MenuComponent";

export default {
  components: { MenuComponent, LocalizedLink },
  data: () => ({
    defaultLanguage: null,
    locales: getSupportedLocales(),
    lang: "sr"
  }),
  methods: {
    changeLanguage(e) {
      const locale = e.target.value;
      this.$i18n.locale = locale;
      this.$store.commit("changeLanguage", locale);
      this.lang = locale;
      this.$router.push(`/${locale}`);
    }
  }
};
</script>
