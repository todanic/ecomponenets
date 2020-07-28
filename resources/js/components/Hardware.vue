<template name="hardware">
	<v-container class="shrink-width harware-container text-center">
		<v-row id="led">
			<v-col cols="12">
				<h2 class="subcat-title mb-5">Hardware</h2>
			</v-col>
			<v-col lg="7" md="7" sm="12" cols="12">
				<v-img  class="subcat-img" max-width="600px" max-height="400px" src="/images/hardware/hardware.jpg" alt=""></v-img>
			</v-col>
			<v-col lg="5" md="5" sm="12" cols="12" class="text-left">
				<h3 class="mb-5">Hardware components <span>for many devices</span></h3>
				<p class="mb-0">Metal housings</p>
				<p class="mb-0">Power supply</p>
			</v-col>
		</v-row>
			<v-row class="wholesale-subcat-info mt-6">
			<v-col cols="12" class="text-left">
				<ul class="pl-0">
					<li>
						Possible procurement of different parts for deviecs, like built-in monitors, touch screen monitors, LED panels, power supplies, Bluetooth modules, antennas, amplifier, and many other parts that you require. 
					</li>
					<li>
						Retail and bulk procuring from European and American distributers, as well as from our Chinese partners at good prices with short delivery time  
					</li>
					<li>
						Metal housings, plexiglass parts and other
					</li>
				</ul>
			</v-col>
		</v-row>
			<v-row>
			<base-miny-gallery :className="'hardware'" :galleryImages="hardwareImages"></base-miny-gallery>
		</v-row>
	</v-container>
</template>
<script>
export default {
	name: 'Hardware',
	data() {
		return {
			hardwareImages: [
			 '/images/hardware/hardware2.jpg',
			 '/images/hardware/hardware3.jpg',
			 '/images/hardware/hardware4.jpg',
			 '/images/hardware/hardware5.jpg',
			 '/images/hardware/hardware6.jpg',
		],
		}
	}
}
</script>