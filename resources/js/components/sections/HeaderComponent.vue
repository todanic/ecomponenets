<template>
  <v-container fluid class="header-container">
    <v-container class="pa-0 shrink-width">
      <v-row class="align-center">
        <v-col class="d-flex justify-center pa-0" lg="12" md="12" sm="12" cols="12">
          <router-link to="/">
            <v-img max-width="150px" src="/images/logo-full.png" alt="logo"></v-img>
          </router-link>
        </v-col>
        <v-col :class="{'pt-6': !$vuetify.breakpoint.xs, 'text-right pt-0 pb-0': $vuetify.breakpoint.xs}" lg="12"
               md="12" sm="12" cols="12">
          <div class="header-container__collapse-menu">
            <span @click="toggleMenu()"></span>
          </div>
          <ul class="header-container__menu pl-0 pt-4 justify-center text-center" :class="{'header-container__menu--active': isActive}">
            <span class="header-container__menu-close" @click="toggleMenu()">X</span>
            <li class="header-container__menu-block">
              <router-link @click.native="toggleMenu()" to="/">Home</router-link>
              <p>{{ __('home.welcome') }}</p>
            </li>
            <li class="header-container__menu-block">
              <router-link @click.native="toggleMenu()" to="/wholesale">Wholesale</router-link>
            </li>
            <li class="header-container__menu-block">
              <router-link @click.native="toggleMenu()" to="/gallery">Gallery</router-link>
            </li>
            <li class="header-container__menu-block">
              <router-link @click.native="toggleMenu()" to="/wires-and-harness">Wire and cable harnessing</router-link>
               <p>{{ __('wires-cables.title') }}</p>
            </li>
            <li class="header-container__menu-block">
              <router-link @click.native="toggleMenu()" to="/about-us">About us</router-link>
            </li>
            <li class="header-container__menu-block">
              <router-link @click.native="toggleMenu()" to="/contact-us">Contact us</router-link>
            </li>
          </ul>
          <v-select
            :items="languages"
            v-model="defaultLanguage"
            label="Solo field"
            dense
            @change="changeLanguage($event)"
            solo>
            </v-select>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>

<script>
  export default {
    data: () => ({
      isActive: false,
      languages: [
        "en",
        "sr"
      ],
      defaultLanguage: null
    }),
    methods: {
      toggleMenu() {
        this.isActive = !this.isActive;
      },
      changeLanguage(lang) {
       this.$store.commit('changeLanguage', lang);
       this.defaultLanguage = lang;
       window.location.reload();
      }
    },
    mounted() {
      this.defaultLanguage = this.$store.state.language;
    }
  }
</script>
