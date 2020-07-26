<template>
<v-container fluid>
	<v-divider class="mb-10"></v-divider>
	<v-container class="shrink-width">
		<base-gallery :galleryImages="galleryImages"></base-gallery>
	</v-container>
</v-container>
</template>
<script>
export default {
	name: 'GalleryView',
	data() {
		return {
				galleryImages: [
					{ src: '/images/gallery/img1.jpg' },
					{ src: '/images/gallery/img2.jpg' },
					{ src: '/images/gallery/img3.jpg' },
					{ src: '/images/gallery/img4.jpg' },
					{ src: '/images/gallery/img5.jpg' },
					{ src: '/images/gallery/img6.jpg' },
					{ src: '/images/gallery/img7.jpg' },
					{ src: '/images/gallery/img8.jpg' },
					{ src: '/images/gallery/img9.jpg' },
					{ src: '/images/gallery/img10.jpg' },
					{ src: '/images/gallery/img11.jpg' },
					{ src: '/images/gallery/img12.jpg' },
					{ src: '/images/gallery/img13.jpg' },
					{ src: '/images/gallery/img14.jpg' },
			],
		}
	}
}
</script>