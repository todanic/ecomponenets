<template>
<v-container fluid>
	<v-container class="shrink-width">
		<v-row>
			<v-col class="text-center mb-5" lg="12" md="12" sm="12" cols="12">
				<h1><span>Gallery</span></h1>
			</v-col>
			<base-miny-gallery :className="'gallery'" :galleryImages="galleryImages"></base-miny-gallery>
		</v-row>
	</v-container>
</v-container>
</template>
<script>

import axios from 'axios'

export default {
	name: 'GalleryView',
	data() {
		return {
			imageDir: '/images/gallery/',
			images: {},
			galleryImages: [],
			className: null
		}
	},
	 mounted() {
		 axios.get('/api/index', {
		 params: {
					 folder: 'gallery'
				 }
			 })
			 .then((response)=>{
				let images = response.data.images;

				images.forEach(image => {
					this.galleryImages.push(this.imageDir + image);
				});
			 })
			 .catch(error => console.log(error))
	},
}
</script>