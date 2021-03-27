<template name="wholesale-view">
  <v-container fluid class="wholesale-view-container">
    <v-container v-show="isParent" class="shrink-width">
      <v-row class="text-center">
        <v-col cols="12">
          <h1 class="mb-8">Whole<span>sale</span></h1>
        </v-col>
        <v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
          <LocalizedLink
            class="prefooter-container__block-link"
            to="/wholesale/wires-cables"
          >
            <div class="round-block__img">
              <v-img
                max-width="240px"
                height="180px"
                src="/images/wires-cables/thumbnail.jpg"
                alt=""
              ></v-img>
            </div>
            <div class="round-block__content">
              <h2>{{ $t("prefooter.links-left.wires-cables") }}</h2>
            </div>
          </LocalizedLink>
        </v-col>
        <v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
          <LocalizedLink
            class="prefooter-container__block-link"
            to="/wholesale/connectors"
          >
            <div class="round-block__img">
              <v-img
                max-width="240px"
                height="180px"
                src="/images/connectors/thumbnail.jpg"
                alt=""
              ></v-img>
            </div>
            <div class="round-block__content">
              <h2>{{ $t("prefooter.links-left.connectors") }}</h2>
            </div>
          </LocalizedLink>
          <router-link to="/wholesale/connectors" class="round-block">
          </router-link>
        </v-col>
        <v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
          <LocalizedLink
            class="prefooter-container__block-link"
            to="/wholesale/pcbs"
          >
            <div class="round-block__img">
              <v-img
                max-width="240px"
                height="180px"
                src="/images/pcbs/pcbs.jpg"
                alt=""
              ></v-img>
            </div>
            <div class="round-block__content">
              <h2>PCBs</h2>
            </div>
          </LocalizedLink>
        </v-col>
        <v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
          <LocalizedLink
            class="prefooter-container__block-link"
            to="/wholesale/led"
          >
            <div class="round-block__img">
              <v-img
                max-width="240px"
                height="180px"
                src="/images/led/led.jpg"
                alt=""
              ></v-img>
            </div>
            <div class="round-block__content">
              <h2>{{ $t("prefooter.links-left.led") }}</h2>
            </div></LocalizedLink
          >
        </v-col>
        <v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
          <LocalizedLink
            class="prefooter-container__block-link"
            to="/wholesale/cable-accessories"
          >
            <div class="round-block__img">
              <v-img
                max-width="240px"
                height="180px"
                src="/images/cable-accessories/thumbnail.jpg"
                alt=""
              ></v-img>
            </div>
            <div class="round-block__content">
              <h2>{{ $t("prefooter.links-left.cables") }}</h2>
            </div></LocalizedLink
          >
        </v-col>
        <v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
          <LocalizedLink
            class="prefooter-container__block-link"
            to="/wholesale/hardware"
          >
            <div class="round-block__img">
              <v-img
                max-width="240px"
                height="180px"
                src="/images/hardware/hardware.jpg"
                alt=""
              ></v-img>
            </div>
            <div class="round-block__content">
              <h2>{{ $t("prefooter.links-left.harware") }}</h2>
            </div></LocalizedLink
          >
        </v-col>
      </v-row>
    </v-container>
    <router-view ref="childRout"></router-view>
  </v-container>
</template>
<script>
import LocalizedLink from "../js/components/LocalizedLink";
export default {
  components: { LocalizedLink },
  name: "WholesaleView",
  data() {
    return {
      isParent: true,
    };
  },
  updated() {
    this.isParent = typeof this.$refs.childRout === "undefined";
  },

  mounted() {
    this.isParent = typeof this.$refs.childRout === "undefined";
  },
};
</script>
