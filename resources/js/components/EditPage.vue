<template>
    <div class="container">
		<h1 class="display-2">Editar Filme</h1>
		<movie-form
			:movie="movie"
			@submit="handleSubmit"
		/>
    </div>
</template>

<script>

import MovieForm from './MovieForm';
export default {
	components: {
		MovieForm,
	},
	
	data() {
		return {
			paramId: null,
			movie: null,
		};
	},


	created() {
		this.paramId = window.location.href.split('/#/')[1];
		axios.get('/api/show/' + this.paramId).then((response) => {
			this.movie = {...response.data.movie};
		});

	},
	
	methods: {
		handleSubmit(form) {
			axios.put('/api/update/' + this.paramId, form).then((response) => {
				window.location = '/';
			})
		}
	}
}
</script>

<style scoped>
	h1 {
		color: white;
	}
</style>

