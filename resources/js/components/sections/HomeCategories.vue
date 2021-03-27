<template>
  <v-container flud class="home-categories">
    <v-container class="shrink-width">
      <v-row
        class="text-center"
        daTa-aos="fade-down"
        data-aos-delay="400"
        data-aos-easing="ease-in-out"
      >
        <v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
          <LocalizedLink
            class="prefooter-container__block-link"
            to="/wholesale/wires-cables"
          >
            <div class="round-block__img">
              <v-img
                max-width="240px"
                height="180px"
                src="images/wires-cables/thumbnail.jpg"
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
                src="images/connectors/thumbnail.jpg"
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
                src="images/led/led.jpg"
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
                src="images/cable-accessories/thumbnail.jpg"
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
                src="images/hardware/hardware.jpg"
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
  </v-container>
</template>
<script>
import LocalizedLink from "../LocalizedLink";

export default {
  components: { LocalizedLink },
  data: () => ({}),
};
</script>
