<template name="wires-and-harness-view">
  <v-container fluid class="wires-and-harness-container">
    <v-container class="shrink-width">
      <v-row>
        <v-col
          lg="12"
          md="12"
          sm="12"
          cols="12"
          class="text-center"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <h1 class="mb-4">
            {{ $t("wire-and-cable-harness.title.text") }}
            <span>{{ $t("wire-and-cable-harness.title.span") }}</span>
          </h1>
        </v-col>
        <v-col
          lg="12"
          md="12"
          sm="12"
          cols="12"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <p>
            {{ $t("wire-and-cable-harness.description") }}
          </p>
          <br />
          <p>
            {{ $t("wire-and-cable-harness.description2") }}
          </p>
          <br />
          <p>
            {{ $t("wire-and-cable-harness.description3") }}
          </p>
        </v-col>
        <v-col
          lg="12"
          md="12"
          sm="12"
          cols="12"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <p>
            <span>{{ $t("wire-and-cable-harness.description4.title") }}</span> –
            {{ $t("wire-and-cable-harness.description4.text") }}
          </p>
          <v-img
            class="ml-auto mr-auto"
            max-width="650px"
            max-height="450px"
            src="/images/wiress-and-harness/prototype.jpg"
          ></v-img>
        </v-col>
        <v-col
          lg="12"
          md="12"
          sm="12"
          cols="12"
          class="mt-6"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <p>
            <span>{{ $t("wire-and-cable-harness.description5.title") }}</span> –
            {{ $t("wire-and-cable-harness.description5.text") }}
          </p>
          <v-img
            class="ml-auto mr-auto"
            max-width="650px"
            max-height="450px"
            src="/images/wiress-and-harness/annotation.jpg"
          ></v-img>
        </v-col>
        <v-col
          lg="12"
          md="12"
          sm="12"
          cols="12"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <p>
            <span>{{ $t("wire-and-cable-harness.description6.title") }}</span> –
            {{ $t("wire-and-cable-harness.description6.text") }}
          </p>
          <v-img
            class="ml-auto mr-auto mb-6 mt-6"
            max-width="650px"
            max-height="450px"
            src="/images/wiress-and-harness/what-to-know.jpg"
          ></v-img>
        </v-col>
        <v-col
          lg="12"
          md="12"
          sm="12"
          cols="12"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <p>
            <span>{{ $t("wire-and-cable-harness.description7.title") }}</span> –
            {{ $t("wire-and-cable-harness.description7.text") }}
          </p>
          <v-img
            class="ml-auto mr-auto"
            max-width="650px"
            max-height="450px"
            src="/images/wiress-and-harness/clipboard.jpg"
          ></v-img>
        </v-col>
        <v-col
          lg="12"
          md="12"
          sm="12"
          cols="12"
          class="mt-10"
          daTa-aos="fade-down"
          data-aos-delay="400"
          data-aos-easing="ease-in-out"
        >
          <p>
            {{ $t("wire-and-cable-harness.description8") }}
          </p>
          <br />
          <p>
            {{ $t("wire-and-cable-harness.description9") }}
          </p>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>
export default {
  name: "WiresAndHarnessView",
  data() {
    return {};
  },
};
</script>
