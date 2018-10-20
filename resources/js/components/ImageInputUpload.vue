<template>
	<div>
		<img
			class="cover float-right"
			:src="base64 && base64.trim().length > 0 ? base64 : 'https://static.allatvkanaler.se/images/tv-placeholder.png'"
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
	
	props: ['src'],

	data() {
		return {
			base64: null,
		};
	},

	watch: {
		base64() {
			this.$emit('base64', this.base64);
		},
		src() {
			this.base64 = this.src;
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
	.cover {
		max-width: 250px;
	}
</style>
