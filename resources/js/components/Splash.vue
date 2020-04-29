<template name="splash-component">
	<v-container fluid class="splash-container pa-0">
		<v-carousel class="carousel-block" fade cycle light height="400" hide-delimiter-background :show-arrows="false">
		<v-carousel-item :src="image.src" class="carousel-item" v-for="(image, i) in images" :key="i">
		</v-carousel-item>
	</v-carousel>
	</v-container>
</template>
<script>
 export default {
        data: () => ({
            images: [
                { src: 'images/splash2.png' },
                { src: 'images/splash4.png' },
            ],
        }),
    }
</script>