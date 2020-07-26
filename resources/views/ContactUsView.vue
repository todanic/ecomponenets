<template>
	<v-container fludi>
		<v-divider class="mb-10"></v-divider>
		<v-container class="shrink-width contact-us-container">
			<v-row>
				<v-col cols="12" class="text-center">
					<h1 class="mb-4">Contact <span>us</span></h1>
				</v-col>
				<v-col lg="4" md="4" sm="12" cols="12">
					<p class="mb-0"><span>Phone:</span></p>
					<p>+381 6995 4448</p>
					<p class="mb-0"><span>Address:</span></p>
					<p class="mb-0">Cara Lazara 2</p>
					<p class="mb-0">Srbobran 21480 Serbia</p>
				</v-col>
      	<v-col class="contact-us-container__col" lg="8" md="8" sm="12" cols="12">
					<v-row>
						<v-col lg="6" md="6" sm="12" cols="12">
						<v-text-field outlined color="#000080" label="First name" v-model="firstName">
						</v-text-field>
						</v-col>
						<v-col lg="6" md="6" sm="12" cols="12">
							<v-text-field outlined color="#000080" label="Email" v-model="email">
						</v-text-field>
						</v-col>
						<v-col lg="6" md="6" sm="12" cols="12">
							<v-text-field outlined color="#000080" label="Country" v-model="country">
						</v-text-field>
						</v-col>
						<v-col lg="6" md="6" sm="12" cols="12">
							<v-text-field outlined color="#000080" label="Phone number" v-model="phone">
						</v-text-field>
						</v-col>
						<v-col cols="12">
							<v-text-field height="150px" outlined color="#000080" label="Message" v-model="message">
						</v-text-field>
						</v-col>
						<v-col cols="12">
							<v-file-input ref="file" @change="encodeImageFileAsURL" color="#000080" prepend-icon="" height="100px" accept="image/*" multiple filled outlined label="Upload image">
							</v-file-input>
						</v-col>
						<v-col cols="12" class="text-right">
							<v-btn color="#000080" large dark @click="contactUs()">
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
import axios from 'axios'

export default  {
	name: 'ContactUsView',
	data () {
		return {
			email: null,
			firstName: null,
			country: null,
			phone: null,
			message: null,
			userImage: null,
			attachments: null,
			images: null
		}
	},
	methods: {
		contactUs() {
			const config = {
				headers: { 'content-type': 'multipart/form-data' }
			}

			let formData = new FormData();
			formData.append('image', this.images);

			axios.post('/email',formData, config)
			.then((response)=>{
				alert('Thank you for contacting us!')
			})
			.catch(error => alert('Error accrued!'))
		},
		 encodeImageFileAsURL(e) {
			 this.images = e[0];
		}
	}
}
</script>