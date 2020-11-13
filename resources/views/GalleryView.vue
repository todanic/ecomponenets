<template>
  <v-container fluid>
    <v-container>
      <v-row>
        <v-col class="text-center mb-5" lg="12" md="12" sm="12" cols="12">
          <h1><span>Gallery</span></h1>
        </v-col>
        <base-miny-gallery :className="'gallery'" :galleryImages="galleryImages"></base-miny-gallery>
      </v-row>
      <v-col class="text-center" lg="12" md="12" sm="12" cols="12">

      </v-col>
    </v-container>
  </v-container>
</template>
<script>

  import ImageService from '../js/services/ImageService';

  export default {
    name: 'GalleryView',
    data() {
      return {
        imageDir: '/images/gallery/',
        images: {},
        galleryImages: [],
        folder: 'gallery',
        className: null
      }
    },
    mounted() {
      ImageService.gallery(this.folder)
        .then(response => {
          let images = response.data.images;

          images.forEach(image => {
            this.galleryImages.push(image);
          });
        })
        .catch(e => {
          console.log(e);
        });
    },
  }
</script>
