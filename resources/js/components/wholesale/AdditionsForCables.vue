<template name="additions-for-cables">
  <v-container class="shrink-width connectors-container text-center">
    <v-row id="pcbs">
      <v-col cols="12">
        <h2 class="subcat-title mb-5">
          {{ $t("wholesale.pages.accessories.title") }}
        </h2>
      </v-col>
      <v-col lg="7" md="7" sm="12" cols="12">
        <v-img
          class="subcat-img"
          max-width="600px"
          max-height="400px"
          src="/images/cable-accessories/accessories.jpg"
          alt=""
        ></v-img>
      </v-col>
      <v-col lg="5" md="5" sm="12" cols="12" class="text-left">
        <h3 class="mb-5">
          {{ $t("wholesale.pages.accessories.sub-title.text") }}
          <span>{{ $t("wholesale.pages.accessories.sub-title.span") }}</span>
        </h3>
        <p class="mb-0">{{ $t("wholesale.pages.accessories.paragraph") }}</p>
        <p class="mb-0">{{ $t("wholesale.pages.accessories.paragraph2") }}</p>
        <p class="mb-0">
          {{ $t("wholesale.pages.accessories.paragraph3") }}
        </p>
      </v-col>
    </v-row>
    <v-row class="wholesale-subcat-info">
      <v-col cols="12">
        <h3 class="mt-5">{{ $t("wholesale.pages.accessories.title") }}</h3>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">{{ $t("wholesale.pages.accessories.list.title") }}</h4>
        <ul class="pl-0">
          <li>{{ $t("wholesale.pages.accessories.list.list-item") }}</li>
          <li>{{ $t("wholesale.pages.accessories.list.list-item2") }}</li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{ $t("wholesale.pages.accessories.list2.title") }}
        </h4>
        <ul class="pl-0">
          <li>{{ $t("wholesale.pages.accessories.list2.list-item") }}</li>
          <li>{{ $t("wholesale.pages.accessories.list2.list-item2") }}</li>
          <li>{{ $t("wholesale.pages.accessories.list2.list-item3") }}</li>
        </ul>
      </v-col>
      <v-col cols="12" class="text-left">
        <h4 class="mb-2">
          {{ $t("wholesale.pages.accessories.list3.title") }}
        </h4>
        <ul class="pl-0">
          <li>{{ $t("wholesale.pages.accessories.list3.list-item") }}</li>
        </ul>
      </v-col>
    </v-row>
    <base-miny-gallery
      :minyGallery="true"
      :className="'additionCables'"
      :galleryImages="accessoriesImages"
    ></base-miny-gallery>
  </v-container>
</template>
<script>
import ImageService from "../../services/ImageService";

export default {
  name: "AdditionsForCables",
  data() {
    return {
      accessoriesImages: [],
      folder: "cable-accessories",
    };
  },
  mounted() {
    ImageService.gallery(this.folder)
      .then((response) => {
        let images = response.data.images;

        images.forEach((image) => {
          this.accessoriesImages.push(image);
        });
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>
