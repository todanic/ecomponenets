<template name="hardware">
  <v-container class="shrink-width harware-container text-center">
    <v-row id="led">
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.hardware.title") }}
        </h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/hardware/hardware.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">
          {{ $t("wholesale.pages.hardware.sub-title.text") }}
          <span>{{ $t("wholesale.pages.hardware.sub-title.span") }}</span>
        </h3>
        <p class="mb-0">{{ $t("wholesale.pages.hardware.paragraph") }}</p>
        <p class="mb-0">{{ $t("wholesale.pages.hardware.paragraph2") }}</p>
      </v-col>
    </v-row>
    <v-row class="wholesale-subcat-info mt-6">
      <v-col cols="12" class="text-left">
        <ul class="pl-0">
          <li>
            {{ $t("wholesale.pages.hardware.list.list-item") }}
          </li>
          <li>
            {{ $t("wholesale.pages.hardware.list.list-item2") }}
          </li>
          <li>{{ $t("wholesale.pages.hardware.list.list-item3") }}</li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery
      :className="'hardware'"
      :minyGallery="true"
      :galleryImages="hardwareImages"
    ></base-miny-gallery>
  </v-container>
</template>
<script>
import ImageService from "../../services/ImageService";

export default {
  name: "Hardware",
  data() {
    return {
      hardwareImages: [],
      folder: "hardware",
    };
  },
  mounted() {
    ImageService.gallery(this.folder)
      .then((response) => {
        let images = response.data.images;

        images.forEach((image) => {
          this.hardwareImages.push(image);
        });
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>
