<template name="prefooter-component">
  <v-container fluid class="prefooter-container pa-0 ma-0">
    <v-container class="shrink-width">
			<v-row class="d-flex justify-center">
				<v-col lg="6" md="6" sm="12" cols="12">
						<h3>Wholesale</h3>
						<ul class="prefooter-block">
							<li><router-link class="prefooter-block-link" to="/wholesale/wires-cables">Wires and cables</router-link></li>
							<li><router-link class="prefooter-block-link" to="/wholesale/connectors">Connectors & electronic components</router-link></li>
							<li><router-link class="prefooter-block-link" to="/wholesale/pcbs">PCBs</router-link></li>
							<li><router-link class="prefooter-block-link" to="/wholesale/led">LEDs</router-link></li>
							<li><router-link class="prefooter-block-link" to="/wholesale/cable-accessories">Cable accessories</router-link></li>
							<li><router-link class="prefooter-block-link" to="/wholesale/hardware">Hardware</router-link></li>
						</ul>
				</v-col>
				<v-col lg="4" md="6" sm="12" cols="12">
						<h3>Learn more</h3>
						<ul class="prefooter-block">
							<li><router-link class="prefooter-block-link" to="/contact-us">Contact us</router-link></li>
							<li><router-link class="prefooter-block-link" to="/about-us">About us</router-link></li>
							<li><router-link class="prefooter-block-link" to="/gallery">Gallery</router-link></li>
							<li><router-link class="prefooter-block-link" to="/wires-and-harness">Wire and cable harnessing</router-link></li>
						</ul>
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
