<template>
	<v-row class="base-gallery-row">
		<!-- <v-col class="text-center mb-5" lg="12" md="12" sm="12" cols="12">
			<h1><span>Gallery</span></h1>
		</v-col>
		<v-dialog v-model="galleryModel" content-class="base-gallery-row__dialog" max-width="900px">
			<template v-slot:activator="{ on }">
				<v-col v-for="image in galleryImages" :key="image.src" lg="3" md="4" sm="6" cols="12">
					<v-img max-width="300px" height="210px" class="base-gallery-row__dialog-image" v-on="on" @click="GetImageSrc(image.src)" :src="image.src"></v-img>
				</v-col>
			</template>
			<v-sheet width="100%" class="base-miny-gallery__dialog-sheet-inner" color="transparent">
				<v-slide-group class="pa-0" v-model="model" center-active show-arrows>
					<v-slide-item v-slot:default="{ active, toggle }" v-for="image in galleryImages" :key="image.src">
						<v-card tile max-width="800px" max-height="600px" class="ma-4 ml-4" color="transparent" >
							<v-img @click="toggle" :src="image.src"></v-img>
						</v-card>
					</v-slide-item>
				</v-slide-group>
				<v-btn class="base-gallery__dialog-btn" width="40px" height="30px" tile depressed @click="CloseDialog()">
					<v-icon color="#000080">X</v-icon>
				</v-btn>
			</v-sheet>
		</v-dialog> -->
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
		GetImageSrc: function(src) {
			this.imageSrc = src;
			var counter = 0;
			//Set clicked image as active image
			this.galleryImages.forEach(element => {
				if(element.src == src) {
					this.model = counter;
					return;
				}
				counter++;
			});
		},
		CloseDialog: function() {
			this.galleryModel = false;
		}
	}
}
</script>