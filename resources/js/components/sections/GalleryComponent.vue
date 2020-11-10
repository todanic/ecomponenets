<template>
  <v-row class="justify-center mb-4" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
    <gallery :id="className" :images="galleryImages" :index="index" @close="index = null"></gallery>
    <v-sheet
        v-if="minyGallery"
        class="mx-auto"
        max-width="100%">
      <v-slide-group
          multiple
          show-arrows="true"
          next-icon="fas fa-angle-double-right"
          prev-icon="fas fa-angle-double-left"
          style="font-family:'FontAwesome';">
        <v-slide-item
            v-for="(image, imageIndex) in galleryImages"
            :key="imageIndex"
            v-slot="{ active, toggle }">
          <div
              class="gallery-image"
              @click="index = imageIndex"
              :style="{ backgroundImage: 'url(' + image + ')', width: '250px', height: '200px' }">
          </div>
        </v-slide-item>
      </v-slide-group>
    </v-sheet>
    <div
        v-else
        class="gallery-image"
        v-for="(image, imageIndex) in galleryImages"
        :key="imageIndex"
        @click="index = imageIndex"
        :style="{ backgroundImage: 'url(' + image + ')', width: '250px', height: '200px' }">
    </div>
  </v-row>
</template>
<script>
  import VueGallery from 'vue-gallery';

  export default {
    name: 'BaseMinyGallery',
    data() {
      return {
        model: null,
        imageSrc: null,
        minyGalleryModel: null,
        index: null
      }
    },
    props: {
      galleryImages: {
        type: Array,
        required: false
      },
      className: {
        type: String,
        required: false
      },
      minyGallery: {
        type: Boolean,
        default: false
      }
    },
    components: {
      'gallery': VueGallery
    },
    methods: {
      GetImageSrc: function (src) {
        this.imageSrc = src;
        var counter = 0;

        this.galleryImages.forEach(element => {
          if (element.src == src) {
            this.model = counter;
            console.log(this.model)
            return;
          }
          counter++;
        });
      },
      CloseDialog: function () {
        this.minyGalleryModel = false;
      }
    }
  }
</script>
