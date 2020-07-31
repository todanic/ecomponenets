<template>
	<v-container fludi>
		<v-container class="shrink-width contact-us-container">
			<v-row>
				<v-col cols="12" class="text-center">
					<h1 class="mb-4">Contact <span>us</span></h1>
				</v-col>
				<v-col lg="4" md="4" sm="12" cols="12">
					<p class="mb-0"><span>Phone:</span></p>
					<p class="mb-0">+381 63 8023260</p>
					<p class="mb-0">+381 60 5120666</p>
					<p class="mb-4">+381 63 1623505</p>
					<p class="mb-0"><span>Address:</span></p>
					<p class="mb-0">Cara Lazara 2</p>
					<p class="mb-0">Srbobran 21480 Serbia</p>
				</v-col>
      	<v-col class="contact-us-container__col" v-if="!loading" lg="8" md="8" sm="12" cols="12">
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
							<v-textarea height="150px" outlined color="#000080" label="Message" v-model="message">
						</v-textarea>
						</v-col>
						<v-col cols="12">
							<v-file-input ref="file" @change="encodeImageFileAsURL" color="#000080" prepend-icon="" height="100px" accept="image/*" multiple filled outlined label="Upload image">
							</v-file-input>
						</v-col>
						<v-col cols="12" class="text-right">
							<v-btn type="submit" color="#000080" large dark @click="submit">
								Send
							</v-btn>
						</v-col>
					</v-row>
				</v-col>
				<v-col v-else class="text-center pb-6">
					<cube-spin></cube-spin>
				</v-col>
			</v-row>
		</v-container>
	</v-container>
</template>
<script>
import axios from 'axios'
import CubeSpin from 'vue-loading-spinner/src/components/Circle.vue'

export default  {
	name: 'ContactUsView',
  components: {
		CubeSpin
	},
	data () {
		return {
			email: null,
			firstName: null,
			country: null,
			phone: null,
			message: null,
			userImage: null,
			attachments: null,
			images: {},
			loading: false
		}
	},
	methods: {
		submit(e) {
			// const config = {
			// 	headers: { 'content-type': 'multipart/form-data' }
			// }
			var formData = new FormData();
			
			formData.append('email', this.email);
			formData.append('name', this.firstName);
			formData.append('country', this.country);
			formData.append('phone', this.phone);
			formData.append('message', this.message);

			if(Object.keys(this.images).length > 1) {
				for (var i = 0; i < this.images.length; i++) {
					formData.append(`images[${i}]`, this.images[i]);
				} 
			} else {
				formData.append('images', this.images);
			}
			this.images = {};
			this.loading = true;

			axios.post('/email',formData)
			.then((response)=>{
				alert('Thank you for contacting us!')
				this.loading = false;
			})
			.catch(error => alert('Error accrued!'))
		},
		encodeImageFileAsURL(e) {
			
			if(e.length > 1) {
				var tempImages = [];
				e.forEach(function(value, index) {
					tempImages.push(value);
				});
				// this.images = Object.assign({}, tempImages);
				this.images = tempImages;
			} else {
				this.images = e[0];
			}
		}
	}
}
</script>