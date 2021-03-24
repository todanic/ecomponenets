<template name="wholesale-view">
<div>
    <header-component></header-component>
	<v-container fluid class="wholesale-view-container">
		<v-container v-show="isParent" class="shrink-width">
			<v-row class="text-center">
				<v-col cols="12">
					<h1 class="mb-8">Whole<span>sale</span></h1>
				</v-col>
				<v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
					<router-link to="/wholesale/wires-cables" class="round-block">
						<div class="round-block__img">
							<v-img max-width="280px" src="images/wires-cables/thumbnail.jpg" alt=""></v-img>
						</div>
						<div class="round-block__content">
								<h2>Wires and cables</h2>
						</div>
					</router-link>
				</v-col>
				<v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
					<router-link to="/wholesale/connectors" class="round-block">
							<div class="round-block__img">
									<v-img max-width="280px" src="images/connectors/thumbnail.jpg" alt=""></v-img>
							</div>
							<div class="round-block__content">
									<h2>Connectors & electronic components</h2>
							</div>
					</router-link>
				</v-col>
				<v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
						<router-link to="/wholesale/pcbs" class="round-block">
							<div class="round-block__img">
									<v-img max-width="280px" src="/images/pcbs/pcbs.jpg" alt=""></v-img>
							</div>
							<div class="round-block__content">
									<h2>PCBs</h2>
							</div>
						</router-link>
				</v-col>
				<v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
					<router-link to="/wholesale/led" class="round-block">
								<div class="round-block__img">
										<v-img max-width="280px" height="228px" src="/images/led/led.jpg" alt=""></v-img>
										<div class="round-block__content">
											<h2>LEDs</h2>
										</div>
								</div>

					</router-link>
				</v-col>
				<v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
					<router-link to="wholesale/cable-accessories" class="round-block">
						<div class="round-block__img">
								<v-img max-width="280px" src="images/cable-accessories/thumbnail.jpg" alt=""></v-img>
						</div>
						<div class="round-block__content">
								<h2>Cable accessories</h2>
						</div>
					</router-link>
				</v-col>
				<v-col class="pb-11" lg="4" md="4" sm="12" cols="12">
					<router-link to="wholesale/hardware" class="round-block">
						<div class="round-block__img">
								<v-img max-width="280px" src="/images/hardware/hardware.jpg" alt=""></v-img>
						</div>
						<div class="round-block__content">
								<h2>Hardware</h2>
						</div>
					</router-link>
				</v-col>
			</v-row>
		</v-container>
		<router-view ref="childRout"></router-view>
	</v-container>
    <home-contact-component></home-contact-component>
    <prefooter></prefooter>
    <footer-component></footer-component>
</div>
</template>
<script>
export default {
	name: 'WholesaleView',
	data () {
		return {
			isParent: true,
		}
	},
	updated() {
		this.isParent = typeof this.$refs.childRout === 'undefined';
	},

	mounted() {
		this.isParent = typeof this.$refs.childRout === 'undefined';
	}
}
</script>
