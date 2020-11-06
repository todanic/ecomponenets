<template name="about-us-view">
	<v-container fluid class="about-us-view-container">
		<v-container>
			<v-row class="justify-center" daTa-aos="fade-down" data-aos-delay="400" data-aos-easing="ease-in-out">
				<v-col cols="12" class="text-center">
					<h1 class="mb-4">
						About <span>us</span>
					</h1>
				</v-col>
				<v-col lg="6" md="6" sm="12" cols="12">
					<p>
						Welcome to eComponents, your number one source for all things electronics. 
						We're dedicated to giving you the very best of electronic components, with a focus on customer service, 
						dependability and uniqueness. 
					</p>
					<p>
						When eComponents team first started out, our passion for helping
						innovative people accomplish incredible things drove us to quit our
						day jobs, and gave us the impetus to turn hard work and inspiration
						into this booming endeavor.  
					</p>
					<p>
						We now provide our customers with electronic components – wires and
						cables, connectors, active and passive components of the highest
						quality made by world’s leading manufacturers, such as Molex, TE
						Connectivity, JST, MEDIKabel, HELUKABEL etc., at very competitive
						prices. We navigate our way through the ocean of electronic
						equipment, terminology, and data sheets with ease - so you don’t have
						to! 
					</p>
					<p>
						We also excel at producing custom cable assemblies and cable
						harnesses for all your connecting needs. If you can imagine it, we
						can make it; you put all the pieces together, we’ll make them work! 
					</p>
					<p>
						eComponents is based in Serbia, but we are able to ship anywhere in
						the world. We are thrilled to be a part of the ever-growing wing of
						the electronics industry. 
					</p>
					<p>
						If you have any questions or comments, please don't hesitate to
						contact us. Our polite staff will gladly assist you and provide
						answers to your inquiries as soon as possible. We are looking
						forward to working with you! 
					</p>
					<p>
						Sincerely,<br>
						eComponents team 
					</p>
					<v-img 
						daTa-aos="fade-down" 
						data-aos-delay="100" 
						data-aos-easing="ease-in-out" 
						class="mt-10" 
						src="/images/logo-name.png"
						 max-width="200px">
					</v-img>
					<p>
						- make it work - 
					</p>
				</v-col>
			</v-row>
		</v-container>
	</v-container>
</template>
<script>
export default  {
	name: 'AboutUsView',
	data () {
		return {

		}
	}
}
</script>