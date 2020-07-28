<template>
<v-container fluid>
	<v-divider class="mb-10"></v-divider>
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
export default {
	name: 'GalleryView',
	data() {
		return {
				galleryImages: [
					'/images/gallery/img1.jpg',
					'/images/gallery/img2.jpg',
					'/images/gallery/img3.jpg',
					'/images/gallery/img4.jpg',
					'/images/gallery/img5.jpg',
					'/images/gallery/img6.jpg',
					'/images/gallery/img7.jpg',
					'/images/gallery/img8.jpg',
					'/images/gallery/img9.jpg',
					'/images/gallery/img10.jpg',
					'/images/gallery/img11.jpg',
					'/images/gallery/img12.jpg',
					'/images/gallery/img13.jpg',
					'/images/gallery/img14.jpg',
						'/images/gallery/img15.jpg',
					'/images/gallery/img16.jpg',
					'/images/gallery/img17.jpg',
					'/images/gallery/img18.jpg',
					'/images/gallery/img19.jpg',
					'/images/gallery/img20.jpg',
					'/images/gallery/img21.jpg',
					'/images/gallery/img22.jpg',
					'/images/gallery/img23.jpg',
					'/images/gallery/img24.jpg',
					'/images/gallery/img25.jpg',
					'/images/gallery/img26.jpg',
					'/images/gallery/img27.jpg',
					'/images/gallery/img28.jpg',
					'/images/gallery/img29.jpg',
					'/images/gallery/img30.jpg',
					'/images/gallery/img31.jpg',
					'/images/gallery/img32.jpg',
					'/images/gallery/img33.jpg',
					'/images/gallery/img34.jpg',
					'/images/gallery/img35.jpg',
			],
			className: null
		}
	}
}
</script>