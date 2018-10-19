<template>
	<div class="row">
		<div class="col-4">
			<image-input-upload
				@base64="handleUpload"
			/>
		</div>
		<div class="col-8">
			<form @submit.prevent="submit">
				<div class="form-group">
					<input
						v-model="form.title"
						type="text"
						class="form-control"
						id="movieTitle"
						aria-describedby="movieHelp"
						placeholder="Título do filme">
				</div>
				<div class="form-group">
					<input
						v-model="form.year"
						type="text"
						class="form-control"
						id="year"
						aria-describedby="yearHelp"
						placeholder="Ano">
				</div>
				<div class="form-group">
					<input
						v-model="form.director"
						type="text"
						class="form-control"
						id="director"
						aria-describedby="directoHelp"
						placeholder="Diretor">
				</div>
				<div class="form-group">
					<textarea
						v-model="form.synopsis"
						class="form-control"
						id="synopsis"
						aria-describedby="synopsisHelp"
						placeholder="Sinopse">
					</textarea>
				</div>
				<button type="submit" class="btn btn-success btn-lg">Salvar</button>
			</form>	
		</div>
	</div>
</template>
<script>
import ImageInputUpload from './ImageInputUpload';

export default {
	components: {
		ImageInputUpload,
	},

	data() {
		return {
			form: {
				title: '',
				year: '',
				cover: '',
				director: '',
				synopsis: '',
			},
		}
	},

	methods: {
		handleUpload(base64) {
			this.form.cover = base64;
		},

		submit() {
			console.log('submit was called')
			this.$emit('submit', this.form);
		}
	}
}
</script>
<style scoped>
	.form-control {
		border: 0;
		background-color: #181816;
		color: white;
		padding: 10px;
		font-size: 32px;
		line-height: 40px;
		margin-right: 10px;
	}
	label {
		color: white;
	}
</style>


