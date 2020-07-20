<template>
	<v-container fludi>
		<v-container class="shrink-width contact-us-container">
			<v-row>
				<v-col cols="12" class="text-center">
					<h1 class="mb-4">Contact <span>us</span></h1>
				</v-col>
				<v-col lg="4" md="4" sm="12" cols="12">
					<p class="mb-0"><span>Tel:</span></p>
					<p>+381 6995 4448</p>
					<p class="mb-0"><span>Adress:</span></p>
					<p class="mb-0">Cara Lazara 2</p>
					<p class="mb-0">Srbobran 21480 Serbia</p>
				</v-col>
      	<v-col lg="8" md="8" sm="12" cols="12">
					<v-row>
						<v-col lg="6" md="6" sm="12" cols="12">
						<v-text-field outlined color="#781212" label="First name">
						</v-text-field>
						</v-col>
						<v-col lg="6" md="6" sm="12" cols="12">
							<v-text-field outlined color="#781212" label="Email">
						</v-text-field>
						</v-col>
						<v-col lg="6" md="6" sm="12" cols="12">
							<v-text-field outlined color="#781212" label="Country">
						</v-text-field>
						</v-col>
						<v-col lg="6" md="6" sm="12" cols="12">
							<v-text-field outlined color="#781212" label="Phone number">
						</v-text-field>
						</v-col>
						<v-col cols="12">
							<v-text-field outlined color="#781212" label="Message">
						</v-text-field>
						</v-col>
						<v-col cols="12">
							<v-file-input color="#781212" prepend-icon="" height="100px" accept="image/*" multiple filled outlined label="Upload image">
							</v-file-input>
						</v-col>
						<v-col cols="12" class="text-right">
							<v-btn color="#781212" large dark>
								Send
							</v-btn>
						</v-col>
					</v-row>
				</v-col>
			</v-row>
		</v-container>
	</v-container>
</template>
<script>
export default  {
	name: 'ContactUsView',
	data () {
		return {

		}
	}
}
</script>