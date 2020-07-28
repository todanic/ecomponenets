<template name="additions-for-cables">
	<v-container class="shrink-width connectors-container text-center">
			<v-row id="pcbs">
			<v-col cols="12">
				<h2 class="subcat-title mb-5">Cable accessories</h2>
			</v-col>
			<v-col lg="7" md="7" sm="12" cols="12">
				<v-img  class="subcat-img" max-width="600px" max-height="400px" src="/images/cable-accessories/accessories.jpg" alt=""></v-img>
			</v-col>
			<v-col lg="5" md="5" sm="12" cols="12" class="text-left">
				<h3 class="mb-5">Everything you need for <span>flawless cable assembly and isolation</span></h3>
				<p class="mb-0">PVC cable ties and holders</p>
				<p class="mb-0">PVC tubes</p>
				<p class="mb-0">Everything you need for neat wiring and marking in one place</p>
			</v-col>
		</v-row>
		<v-row class="wholesale-subcat-info">
				<v-col cols="12">
					<h3 class="mt-5">
						Cable accessories					
					</h3>
				</v-col>
				<v-col cols="12" class="text-left">
					<h4 class="mb-2">
						Cable ties and cable holders
					</h4>
					<ul class="pl-0">
						<li>
							Cable ties different dimension and colors for fixing cables  
						</li>
						<li>
							Holders and cable mounts for easier cable handling
						</li>
					</ul>
				</v-col>
				<v-col cols="12" class="text-left">
					<h4 class="mb-2">
						Isolation program
					</h4>
					<ul class="pl-0">
						<li>
							Heatshrinking tubes different sizes and scales, for wires and cables isolation  
						</li>
						<li>
							PVC tubes different sizes and dimensions 
						</li>
						<li>
							Ribbed PVC tubes, PVC chains and others
						</li>
					</ul>
				</v-col>
				<v-col cols="12" class="text-left">
					<h4 class="mb-2">
						Alternative offer
					</h4>
					<ul class="pl-0">
						<li>
							eComponents also offers alternative models of connectors, manufactured by our Chinese partners if your project demands lower priced, but still very reliable components  
						</li>
					</ul>
				</v-col>
			</v-row>
			<v-row>
				<base-miny-gallery :galleryImages="accessoriesImages"></base-miny-gallery>
			</v-row>
	</v-container>
</template>
<script>
export default {
	name: 'AdditionsForCables',
	data() {
		return {
				accessoriesImages: [
					'/images/cable-accessories/accessories2.jpg',
					'/images/cable-accessories/accessories3.jpg',
					'/images/cable-accessories/accessories4.jpg',
					'/images/cable-accessories/accessories5.jpg',
					'/images/cable-accessories/accessories6.jpg',
					'/images/cable-accessories/accessories7.jpg',
					'/images/cable-accessories/accessories8.jpg',
					'/images/cable-accessories/accessories9.jpg',
			],
		}
	}
}
</script>