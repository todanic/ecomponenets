<template name="led">
	<v-container class="shrink-width led-container text-center">
		<v-row id="led">
			<v-col cols="12">
				<h2 class="subcat-title mb-5">Led program</h2>
			</v-col>
			<v-col lg="7" md="7" sm="12" cols="12">
				<v-img  class="subcat-img" max-width="600px" max-height="400px" src="/images/led/led.jpg" alt=""></v-img>
			</v-col>
			<v-col lg="5" md="5" sm="12" cols="12" class="text-left">
				<h3 class="mb-5">Led <span>lighthing</span></h3>
				<p class="mb-0">Wide range of every connection type</p>
				<p class="mb-0">Possible mounting of cables and connectors on LED strips and modules for easier connection</p>
				<p class="mb-0">Easy mounting (3M strip)</p>
			</v-col>
		</v-row>
		<v-row class="wholesale-subcat-info mt-6">
			<v-col cols="12" class="text-left">
				<ul class="pl-0">
					<li>
						Diverse assortment of LED strips and modules 
					</li>
					<li>
						Strips with different number of LEDs per meter (30LED/m, 60LED/m…)
					</li>
					<li>
						One-coloured and RGB strips 
					</li>
					<li>
						Different LEDs dimension (3030, 3528, 5050 and other) 
					</li>
					<li>
						Strips with different certificates IP protection (Without protection, impact resistant, dust, water (glued) and other)
					</li>
				</ul>
			</v-col>
		</v-row>
			<v-row>
			<base-miny-gallery :galleryImages="ledImages"></base-miny-gallery>
		</v-row>
	</v-container>
</template>
<script>
export default {
	name: 'Led',
	data() {
		return {
				ledImages: [
					'/images/led/led.jpg',
					'/images/led/led2.jpg',
					'/images/led/led3.jpg',
			],
		}
	}
}
</script>