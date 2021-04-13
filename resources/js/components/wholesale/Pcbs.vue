<template name="pcbs">
  <v-container class="shrink-width connectors-container text-center">
    <v-row id="pcbs">
      <v-col cols="12">
        <h2 class="subcat-title mb-5">{{ $t("wholesale.pages.pcb.title") }}</h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/pcbs/pcbs.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">
          {{ $t("wholesale.pages.pcb.sub-title.text") }}
          <span>{{ $t("wholesale.pages.pcb.sub-title.span") }}</span>
        </h3>
        <p class="mb-0">{{ $t("wholesale.pages.pcb.paragraph") }}</p>
        <p class="mb-0">{{ $t("wholesale.pages.pcb.paragraph2") }}</p>
        <p class="mb-0">{{ $t("wholesale.pages.pcb.description") }}</p>
      </v-col>
    </v-row>
    <v-row class="wholesale-subcat-info mt-6">
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">{{ $t("wholesale.pages.pcb.list.title") }}</h4>
        <ul>
          <li>{{ $t("wholesale.pages.pcb.list.list-item") }}</li>
          <li>{{ $t("wholesale.pages.pcb.list.list-item2") }}</li>
          <li>{{ $t("wholesale.pages.pcb.list.list-item3") }}</li>
          <li>{{ $t("wholesale.pages.pcb.list.list-item4") }}</li>
          <li>{{ $t("wholesale.pages.pcb.list.list-item5") }}</li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">{{ $t("wholesale.pages.pcb.list2.title") }}</h4>
        <ul>
          <li>{{ $t("wholesale.pages.pcb.list2.list-item") }}</li>
          <li>{{ $t("wholesale.pages.pcb.list2.list-item2") }}</li>
          <li>{{ $t("wholesale.pages.pcb.list2.list-item3") }}</li>
          <li>{{ $t("wholesale.pages.pcb.list2.list-item4") }}</li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery
      :minyGallery="true"
      :galleryImages="pcbsImages"
    ></base-miny-gallery>
  </v-container>
</template>
<script>
import ImageService from "../../services/ImageService";

export default {
  name: "Pcbs",
  data() {
    return {
      pcbsImages: [],
      folder: "pcbs",
    };
  },
  mounted() {
    ImageService.gallery(this.folder)
      .then((response) => {
        let images = response.data.images;

        images.forEach((image) => {
          this.pcbsImages.push(image);
        });
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>
