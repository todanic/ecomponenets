<template>
  <v-container fluid class="header-container">
    <v-container class="pa-0 shrink-width">
      <v-row class="align-center">
        <v-col
          class="d-flex justify-center pa-0"
          lg="12"
          md="12"
          sm="12"
          cols="12"
        >
          <router-link to="/">
            <v-img
              max-width="150px"
              src="/images/logo-full.png"
              alt="logo"
            ></v-img>
          </router-link>
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
              <router-link @click.native="toggleMenu()" to="/"
                >Home</router-link
              >
            </li>
            <li class="header-container__menu-block">
                <LocalizedLink to="/wholesale">{{ $t("nav.wholesale") }}</LocalizedLink>
              <!-- <router-link @click.native="toggleMenu()" to="/wholesale"
                >Wholesale</router-link
              > -->
            </li>
            <li class="header-container__menu-block">
              <router-link
                @click.native="toggleMenu()"
                :to="'/' + defaultLanguage + '/gallery'"
                >Gallery</router-link
              >
            </li>
            <li class="header-container__menu-block">
              <router-link
                @click.native="toggleMenu()"
                :to="'/' + defaultLanguage + '/wires-and-harness'"
                >Wire and cable harnessing</router-link
              >
            </li>
            <li class="header-container__menu-block">
              <router-link
                @click.native="toggleMenu()"
                :to="'/' + defaultLanguage + '/about-us'"
                >About us</router-link
              >
            </li>
            <li class="header-container__menu-block">
              <router-link
                @click.native="toggleMenu()"
                :to="'/' + defaultLanguage + '/contact-us'"
                >Contact us</router-link
              >
            </li>
          </ul>
          <select
            style="background-color: white"
            class="language-change"
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
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>

<script>
import { getSupportedLocales } from "../../util/i18n/supported-locales";
import LocalizedLink from "../LocalizedLink"

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
      this.$store.commit('changeLanguage', locale);

      this.$router.push(`/${locale}`);
    },

  },
};
</script>
