<template name="wholesale-view">
	<v-container fluid class="wholesale-view-container">
		<v-container>
			<v-row>
				<router-view></router-view>
			</v-row>
		</v-container>
	</v-container>
</template>
<script>
export default {
	name: 'WholesaleView',
	data () {
		return {

		}
	}
}
</script>