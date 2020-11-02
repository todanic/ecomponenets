<template>
	 <v-row class="justify-center mb-4">
    <gallery :id="className" :images="galleryImages" :index="index" @close="index = null"></gallery>
    <div
      class="gallery-image"
      v-for="(image, imageIndex) in galleryImages"
      :key="imageIndex"
      @click="index = imageIndex"
      :style="{ backgroundImage: 'url(' + image + ')', width: '250px', height: '200px' }"
    ></div>
  </v-row>
</template>
<script>
import VueGallery from 'vue-gallery';

export default {
	name: 'BaseMinyGallery',
	data () {
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
		}
	},
		components: {
		'gallery': VueGallery
	},
	methods: {
		GetImageSrc: function(src) {
			this.imageSrc = src;
			var counter = 0;

			this.galleryImages.forEach(element => {
				if(element.src == src) {
					this.model = counter;
					console.log(this.model)
					return;
				}
				counter++;
			});
		},
		CloseDialog: function() {
			this.minyGalleryModel = false;
		}
	}
}
</script>