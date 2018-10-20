<template>
    <div class="container">
		<h1 class="display-3">Novo Filme</h1>
		<movie-form
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
	
	methods: {
		handleSubmit(form) {
			form.photo = 'image';
			axios.post('/api/save', form).then((response) => {
				window.location = '/';
			});
		}
	}
}
</script>

<style scoped>
	h1 {
		color: white;
	}
</style>

