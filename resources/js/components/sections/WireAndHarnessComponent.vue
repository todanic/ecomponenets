<template>
	<v-container fluid class="wire-harness-container pa-0">
		<v-parallax src="images/parallax.jpg">
			<v-container class="shrink-width">
				<v-row daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
					<v-col class="text-center" lg="12" md="12" sm="12" cols="12">
						<h2 class="mb-4">
							Wire and cable harnessing 
						</h2>
					</v-col>
					<v-col lg="12" md="12" sm="12" cols="12">
						<p>
							We offer our customers and partners in different industries
							tailor-made solutions in the field of wire harnesses. Home appliance
							industry, gaming and vending machines industry and many other rely
							on us to bring their designs to life. Be it a single wire or a
							complex wire harness system – we got you covered! 
						</p>
					</v-col>
					<v-col lg="12" md="12" sm="12" cols="12" class="text-center">
						 <v-btn outlined class="wire-harness-container__btn" x-large rounded>
							  <router-link to="/wires-and-harness">Read more</router-link>
						 </v-btn>
					</v-col>
				</v-row>
			</v-container>
		</v-parallax>
	</v-container>
</template>
<script>
export default {
	name: 'WireAndHarnessComponent'
}
</script>