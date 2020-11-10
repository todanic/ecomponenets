<template>
  <v-container fluid class="prefooter-container pa-0 ma-0">
    <v-container class="shrink-width">
			<v-row class="d-flex justify-center">
				<v-col lg="6" md="6" sm="12" cols="12">
						<h3>Wholesale</h3>
						<ul class="prefooter-container__block pa-0">
							<li><router-link class="prefooter-container__block-link" to="/wholesale/wires-cables">Wires and cables</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/wholesale/connectors">Connectors & electronic components</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/wholesale/pcbs">PCBs</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/wholesale/led">LEDs</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/wholesale/cable-accessories">Cable accessories</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/wholesale/hardware">Hardware</router-link></li>
						</ul>
				</v-col>
				<v-col lg="4" md="6" sm="12" cols="12">
					<h3>Learn more</h3>
						<ul class="prefooter-container__block pa-0">
							<li><router-link class="prefooter-container__block-link" to="/contact-us">Contact us</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/about-us">About us</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/gallery">Gallery</router-link></li>
							<li><router-link class="prefooter-container__block-link" to="/wires-and-harness">Wire and cable harnessing</router-link></li>
						</ul>
						<router-link to="/">
								<v-img max-width="200px" class="mt-6" src="/images/logo-name.png"></v-img>
						</router-link>
				</v-col>
				<v-col class="text-center prefooter-container__social-links" lg="12" md="12" sm="12" cols="12">
					<a class="mr-2" target="_blank" href="https://instagram.com/ecomponentsdoo?igshid=1laai7c68an6d">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
					<a target="_blank" href="https://www.facebook.com/EComponents-108169840984289/?modal=admin_todo_tour">
						<i large class="fa fa-facebook-square" aria-hidden="true"></i>
					</a>
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
