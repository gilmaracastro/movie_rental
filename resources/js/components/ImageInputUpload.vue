<template>
	<div>
		<img
			class="float-right"
			:src="base64 || 'https://static.allatvkanaler.se/images/tv-placeholder.png'"
			@click="handleImageClick"
		/>
		<div v-show="false">
				<input @input="readURL" ref="inputFile" type="file">
				<label>Choose file</label>
		</div>
	</div>
</template>
<script>
export default {
	
	data() {
		return {
			base64: null,
		};
	},

	watch: {
		base64() {
			this.$emit('base64', this.base64);
		}
	},
	
	methods: {
		handleImageClick() {
			this.$refs.inputFile.click();
		},
		
		readURL(event) {
			if (event.target.files && event.target.files[0]) {
				var reader = new FileReader();

				reader.onload = (e) => {
					this.base64 = e.target.result;
				}

				reader.readAsDataURL(event.target.files[0]);
			}
		}
	},
}
</script>
<style scoped>
	img {
		cursor: pointer;
	}
</style>
