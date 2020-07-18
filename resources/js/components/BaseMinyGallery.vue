<template>
	<div class="base-miny-gallery">
		<v-dialog v-model="minyGalleryModel" content-class="base-miny-gallery__dialog" max-width="800px">
			<template v-slot:activator="{ on }">
				<v-sheet width="100%" class="base-miny-gallery__dialog-sheet">
					<v-slide-group class="base-miny-gallery__slide pa-0" v-model="model" show-arrows>
						<v-slide-item v-for="image in galleryImages" :key="image.src">
							<v-card tile width="300px" class="ma-4 ml-0" >
								<v-img class="base-miny-gallery__slide-image" v-on="on" @click="GetImageSrc(image.src)" :src="image.src"></v-img>
							</v-card>
						</v-slide-item>
					</v-slide-group>
				</v-sheet>
			</template>
			<v-img :src="imageSrc"></v-img>
			<v-btn class="base-miny-gallery__dialog-btn" width="40px" height="30px" tile depressed @click="CloseDialog()">
				<v-icon color="#781212">X</v-icon>
			</v-btn>
		</v-dialog>
	</div>
</template>
<script>
export default {
	name: 'BaseMinyGallery',
	data () {
		return {
			model: null,
			imageSrc: null,
			minyGalleryModel: null
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
		},
		CloseDialog: function() {
			this.minyGalleryModel = false;
		}
	}
}
</script>