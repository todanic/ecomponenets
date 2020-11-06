<template>
	<v-container flud class="home-categories">
			<v-container class="shrink-width">
					<v-row class="text-center" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
							<v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
								<router-link to="/wholesale/wires-cables" class="round-block">
									<div class="round-block__img">
										<v-img max-width="240px" height="180px" src="images/wires-cables/thumbnail.jpg" alt=""></v-img>
									</div>
									<div class="round-block__content">
											<h2>Wires and cables</h2>
									</div>
								</router-link>
							</v-col>
							<v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
								<router-link to="/wholesale/connectors" class="round-block">
										<div class="round-block__img">
												<v-img max-width="240px" height="180px" src="images/connectors/thumbnail.jpg" alt=""></v-img>
										</div>
										<div class="round-block__content">
												<h2>Connectors & electronic components</h2>
										</div>
								</router-link>
							</v-col>
							<v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
									<router-link to="/wholesale/pcbs" class="round-block">
										<div class="round-block__img">
												<v-img max-width="240px" height="180px" src="/images/pcbs/pcbs.jpg" alt=""></v-img>
										</div>
										<div class="round-block__content">
												<h2>PCBs</h2>
										</div>
									</router-link>
							</v-col>
							<v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
								<router-link to="/wholesale/led" class="round-block">
											<div class="round-block__img">
													<v-img max-width="240px" height="180px" src="images/led/led.jpg" alt=""></v-img>
											</div>
											<div class="round-block__content">
													<h2>LEDs</h2>
											</div>
								</router-link>
							</v-col>
							<v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
								<router-link to="wholesale/cable-accessories" class="round-block">
									<div class="round-block__img">
											<v-img max-width="240px" height="180px" src="images/cable-accessories/thumbnail.jpg" alt=""></v-img>
									</div>
									<div class="round-block__content">
											<h2>Cable accessories</h2>
									</div>
								</router-link>
							</v-col>
							<v-col class="pb-11" lg="4" md="4" sm="6" cols="12">
								<router-link to="wholesale/hardware" class="round-block">
									<div class="round-block__img">
											<v-img max-width="240px" height="180px" src="images/hardware/hardware.jpg" alt=""></v-img>
									</div>
									<div class="round-block__content">
											<h2>Hardware</h2>
									</div>
								</router-link>
							</v-col>
					</v-row>
			</v-container>
	</v-container>
</template>
<script>

	export default {
			data: () => ({
			})
	}
</script>
