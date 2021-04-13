<template name="led">
  <v-container class="shrink-width led-container text-center">
    <v-row>
      <v-col cols="12">
        <h2 class="subcat-title mb-5">{{ $t("wholesale.pages.led.title") }}</h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/led/led.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">
          {{ $t("wholesale.pages.led.sub-title.text") }}
          <span>{{ $t("wholesale.pages.led.sub-title.span") }}</span>
        </h3>
        <p class="mb-0">{{ $t("wholesale.pages.led.paragraph") }}</p>
        <p class="mb-0">
          {{ $t("wholesale.pages.led.paragraph2") }}
        </p>
        <p class="mb-0">{{ $t("wholesale.pages.led.paragraph3") }}</p>
      </v-col>
    </v-row>
    <v-row class="wholesale-subcat-info mt-6">
      <v-col cols="12" class="text-left">
        <ul class="pl-0">
          <li>{{ $t("wholesale.pages.led.list.list-item") }}</li>
          <li>{{ $t("wholesale.pages.led.list.list-item2") }}</li>
          <li>{{ $t("wholesale.pages.led.list.list-item3") }}</li>
          <li>{{ $t("wholesale.pages.led.list.list-item4") }}</li>
          <li>{{ $t("wholesale.pages.led.list.list-item5") }}</li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery
      :className="'led'"
      :minyGallery="true"
      class
      :galleryImages="ledImages"
    ></base-miny-gallery>
  </v-container>
</template>
<script>
import ImageService from "../../services/ImageService";

export default {
  name: "Led",
  data() {
    return {
      ledImages: [],
      folder: "led",
    };
  },
  mounted() {
    ImageService.gallery(this.folder)
      .then((response) => {
        let images = response.data.images;

        images.forEach((image) => {
          this.ledImages.push(image);
        });
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>
