<template name="splash-component">
	<v-container fluid class="splash-container pa-0">
		<v-carousel dark class="carousel-block" fade cycle light height="500" hide-delimiter-background :show-arrows="false">
		<v-carousel-item :src="image.src" class="carousel-item" v-for="(image, i) in images" :key="i">
		</v-carousel-item>
	</v-carousel>
	</v-container>
</template>
<script>
 export default {
        data: () => ({
            images: [
                { src: '/images/splash/splash2.jpg' },
                { src: '/images/splash/splash3.jpeg' },
                { src: '/images/splash/splash4.jpeg' },
                { src: '/images/splash/splash5.jpg' },
                { src: '/images/splash/splash6.jpg' },
                { src: '/images/splash/splash7.jpg' },
            ],
        }),
    }
</script>