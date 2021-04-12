<template>
  <v-container fluid class="why-us-container">
    <v-container class="shrink-width">
      <v-row
        class="justify-center"
        daTa-aos="fade-down"
        data-aos-delay="300"
        data-aos-easing="ease-in-out"
      >
        <h2>
          {{ $t("why-choose-us-home.main-title.text") }}
          <span>{{ $t("why-choose-us-home.main-title.span") }}</span>
        </h2>
      </v-row>
      <v-row>
        <v-col
          lg="4"
          md="4"
          sm="6"
          cols="12"
          class="text-center why-us-container__cols"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-img
            class="ml-auto mr-auto"
            max-width="90px"
            src="/images/why-us/fast.png"
          ></v-img>
          <h3>{{ $t("why-choose-us-home.title") }}</h3>
          <p>
            {{ $t("why-choose-us-home.description") }}
          </p>
        </v-col>
        <v-col
          lg="4"
          md="4"
          sm="6"
          cols="12"
          class="text-center why-us-container__cols"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-img
            class="ml-auto mr-auto"
            max-width="110px"
            src="/images/why-us/save-money.png"
          ></v-img>
          <h3>{{ $t("why-choose-us-home.title2") }}</h3>
          <p>{{ $t("why-choose-us-home.description2") }}</p>
        </v-col>
        <v-col
          lg="4"
          md="4"
          sm="6"
          cols="12"
          class="text-center why-us-container__cols"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-img
            class="ml-auto mr-auto"
            max-width="100px"
            src="/images/why-us/experience.png"
          ></v-img>
          <h3>{{ $t("why-choose-us-home.title3") }}</h3>
          <p>{{ $t("why-choose-us-home.description3") }}</p>
        </v-col>
        <v-col
          lg="4"
          md="4"
          sm="6"
          cols="12"
          class="text-center why-us-container__cols"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-img
            class="ml-auto mr-auto"
            max-width="115px"
            src="/images/why-us/on-time.png"
          ></v-img>
          <h3>{{ $t("why-choose-us-home.title4") }}</h3>
          <p>{{ $t("why-choose-us-home.description4") }}</p>
        </v-col>
        <v-col
          lg="4"
          md="4"
          sm="6"
          cols="12"
          class="text-center why-us-container__cols"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-img
            class="ml-auto mr-auto"
            max-width="120px"
            src="/images/why-us/trusted.png"
          ></v-img>
          <h3>{{ $t("why-choose-us-home.title5") }}</h3>
          <p>{{ $t("why-choose-us-home.description5") }}</p>
        </v-col>
        <v-col
          lg="4"
          md="4"
          sm="6"
          cols="12"
          class="text-center why-us-container__cols"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <v-img
            class="ml-auto mr-auto"
            max-width="75px"
            src="/images/why-us/quality.png"
          ></v-img>
          <h3>{{ $t("why-choose-us-home.title6") }}</h3>
          <p>{{ $t("why-choose-us-home.description6") }}</p>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>
export default {
  name: "WhyUs",

  data: () => ({
    //
  }),
};
</script>
