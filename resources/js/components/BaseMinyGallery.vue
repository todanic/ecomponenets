<template>
	<div class="base-miny-gallery">
		<v-dialog v-model="minyGalleryModel" content-class="base-miny-gallery__dialog" max-width="900px">
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
			<v-sheet width="100%" class="base-miny-gallery__dialog-sheet-inner" color="transparent">
				<v-slide-group class="pa-0" v-model="model" center-active show-arrows>
					<v-slide-item v-slot:default="{ active, toggle }" v-for="image in galleryImages" :key="image.src">
						<v-card tile max-width="800px" class="ma-4 ml-4" >
							<v-img :src="image.src"></v-img>
						</v-card>
					</v-slide-item>
				</v-slide-group>
				<v-btn class="base-gallery__dialog-btn" width="40px" height="30px" tile depressed @click="CloseDialog()">
					<v-icon color="#781212">X</v-icon>
				</v-btn>
			</v-sheet>
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