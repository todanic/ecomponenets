<template>
    <v-row class="base-gallery-row">

        <div>
            <gallery :id="className" :images="galleryImages" :index="index" @close="index = null"></gallery>
            <div
                    class="image"
                    v-for="(image, imageIndex) in galleryImages"
                    :key="imageIndex"
                    @click="index = imageIndex"
                    :style="{ backgroundImage: 'url(' + image + ')', width: '250px', height: '200px' }"
            ></div>
        </div>
    </v-row>
</template>
<script>
  import VueGallery from 'vue-gallery';

  export default {
    name: 'BaseGallery',
    components: {
      'gallery': VueGallery
    },
    data() {
      return {
        galleryModel: null,
        imageSrc: null,
        model: null,
        className: null,
        index: null
      }
    },
    props: {
      galleryImages: {
        type: Array,
        required: false
      }
    },
    methods: {
      GetImageSrc: function (src) {
        this.imageSrc = src;
        var counter = 0;
        //Set clicked image as active image
        this.galleryImages.forEach(element => {
          if (element.src == src) {
            this.model = counter;
            return;
          }
          counter++;
        });
      },
      CloseDialog: function () {
        this.galleryModel = false;
      }
    }
  }
</script>