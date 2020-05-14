<template name="wholesale-view">
	<v-container fluid class="wholesale-view-container">
		<v-container class="shrink-width">
			<router-view></router-view>
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