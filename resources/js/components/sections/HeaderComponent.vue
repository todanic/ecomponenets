<template>
  <v-container fluid class="header-container">
    <v-container class="pa-0 shrink-width">
      <select
        class="language-selector"
        :value="$i18n.locale"
        @change.prevent="changeLanguage"
      >
        <option
          :value="locale.code"
          v-for="locale in locales"
          :key="locale.code"
        >
          {{ locale.name }}
        </option>
      </select>
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
          <div class="header-container__collapse-menu">
            <span @click="toggleMenu()"></span>
          </div>
          <ul
            class="header-container__menu pl-0 pt-4 justify-center text-center"
            :class="{ 'header-container__menu--active': isActive }"
          >
            <span class="header-container__menu-close" @click="toggleMenu()"
              >X</span
            >
            <li class="header-container__menu-block">
              <LocalizedLink to="/">{{ $t("nav.home") }}</LocalizedLink>
            </li>
            <li class="header-container__menu-block">
              <LocalizedLink to="/wholesale">{{
                $t("nav.wholesale")
              }}</LocalizedLink>
            </li>
            <li class="header-container__menu-block">
              <LocalizedLink to="/gallery">{{
                $t("nav.gallery")
              }}</LocalizedLink>
            </li>
            <li class="header-container__menu-block">
              <LocalizedLink to="/wires-and-harness">{{
                $t("nav.wires-and-harness")
              }}</LocalizedLink>
            </li>
            <li class="header-container__menu-block">
              <LocalizedLink to="/about-us">{{
                $t("nav.about-us")
              }}</LocalizedLink>
            </li>
            <li class="header-container__menu-block">
              <LocalizedLink to="/contact-us">{{
                $t("nav.contact-us")
              }}</LocalizedLink>
            </li>
          </ul>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>

<script>
import { getSupportedLocales } from "../../util/i18n/supported-locales";
import LocalizedLink from "../LocalizedLink";

export default {
  components: { LocalizedLink },
  data: () => ({
    isActive: false,
    defaultLanguage: null,
    locales: getSupportedLocales(),
  }),
  methods: {
    toggleMenu() {
      this.isActive = !this.isActive;
    },
    changeLanguage(e) {
      const locale = e.target.value;
      this.$i18n.locale = locale;
      this.$store.commit("changeLanguage", locale);

      this.$router.push(`/${locale}`);
    },
  },
};
</script>
