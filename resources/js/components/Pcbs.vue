<template name="pcbs">
	<v-container class="shrink-width connectors-container text-center">
		<v-row id="pcbs">
			<v-col cols="12">
				<h2 class="subcat-title mb-5">PCBs</h2>
			</v-col>
			<v-col lg="7" md="7" sm="12" cols="12">
				<v-img  class="subcat-img" max-width="600px" max-height="400px" src="/images/connectors.jpeg" alt=""></v-img>
			</v-col>
			<v-col lg="5" md="5" sm="12" cols="12" class="text-left">
				<h3 class="mb-5">PCB <span>design</span></h3>
				<p class="mb-0">Rapid prototyping</p>
				<p class="mb-0">Serial production</p>
				<p class="mb-0">Filling of PCB with SMT components</p>
			</v-col>
		</v-row>
		<v-row class="wholesale-subcat-info mt-6">
			<v-col cols="12" class="text-left">
				<h4 class="mb-2">
					Assistance with design 
				</h4>
				<ul>
					<li>
						Design per customer request
					</li>
					<li>
						Making documentation
					</li>
					<li>
						Electronic design 
					</li>
					<li>
						PCB design
					</li>
					<li>
						Quick prototyping
					</li>
				</ul>
			</v-col>
			<v-col cols="12" class="text-left">
				<h4 class="mb-2">Proudction</h4>
				<ul>
					<li>
						Manual and robotized serial production 
					</li>
					<li>
						Control and testing
					</li>
					<li>
						Quality guaranteed
					</li>
					<li>
						Affordable prices
					</li>
				</ul>
			</v-col>
		</v-row>
	</v-container>
</template>
<script>
export default {
	name: 'Pcbs',
	data() {
		return {
			
		}
	}
}
</script>