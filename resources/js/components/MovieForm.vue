<template>
	<div class="row">
		<div class="col-4">
			<image-input-upload
				:src="form.photo"
				@base64="handleUpload"
			/>
		</div>
		<div class="col-8">
			<form @submit.prevent="submit">
				<div class="form-group">
					<input
						v-model="form.name"
						type="text"
						class="form-control"
						id="movieTitle"
						aria-describedby="movieHelp"
						placeholder="Título do filme"
						autofocus>
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
						rows="7"
						placeholder="Sinopse">
					</textarea>
				</div>
				<button type="submit" class="btn btn-success btn-lg float-right mb-0">Salvar</button>
				<button @click="handleCancelClick" class="btn btn-outline-light btn-lg float-right mr-2 mb-0">Cancelar</button>
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

	props: ['movie'],

	data() {
		return {
			form: {
				name: this.movie ? this.movie.name : null,
				year: this.movie ? this.movie.year : null,
				photo: this.movie ? this.movie.photo : null,
				director: this.movie ? this.movie.director : null,
				synopsis: this.movie ? this.movie.synopsis : null,
			},
		}
	},

	watch: {
		movie() {
			this.form = {...this.movie};
		}
	},


	methods: {
		handleUpload(base64) {
			this.form.photo = base64;
		},

		submit() {
			this.$emit('submit', this.form);
		},
		handleCancelClick() {
			window.location = '/';
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


