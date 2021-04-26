<template>
  <div>
    <ul
      class="menu-container__menu pl-0 pt-4 justify-center text-center"
      :class="{ active: isActive }"
    >
      <!-- <span class="menu-container__menu-close" @click="toggleMenu()">X</span> -->
      <li class="menu-container__menu-block" @click="toggleMenu()">
        <LocalizedLink to="/">{{ $t("nav.home") }}</LocalizedLink>
      </li>
      <li class="menu-container__menu-block" @click="toggleMenu()">
        <LocalizedLink to="/wholesale">{{ $t("nav.wholesale") }}</LocalizedLink>
      </li>
      <li class="menu-container__menu-block" @click="toggleMenu()">
        <LocalizedLink to="/gallery">{{ $t("nav.gallery") }}</LocalizedLink>
      </li>
      <li class="menu-container__menu-block" @click="toggleMenu()">
        <LocalizedLink to="/wires-and-harness">{{
          $t("nav.wires-and-harness")
        }}</LocalizedLink>
      </li>
      <li class="menu-container__menu-block" @click="toggleMenu()">
        <LocalizedLink to="/about-us">{{ $t("nav.about-us") }}</LocalizedLink>
      </li>
      <li class="menu-container__menu-block" @click="toggleMenu()">
        <LocalizedLink to="/contact-us">{{
          $t("nav.contact-us")
        }}</LocalizedLink>
      </li>
    </ul>
    <div class="hamburger" :class="{ active: isActive }" @click="toggleMenu()">
      <span class="hamburger__patty" :class="{ active: isActive }"></span>
      <span class="hamburger__patty" :class="{ active: isActive }"></span>
      <span class="hamburger__patty" :class="{ active: isActive }"></span>
    </div>
  </div>
</template>
<script>
import LocalizedLink from "./LocalizedLink";

export default {
  components: {
    LocalizedLink,
  },
  data: () => ({
    isActive: false,
  }),
  methods: {
    toggleMenu() {
      this.isActive = !this.isActive;
    },
  },
};
</script>
