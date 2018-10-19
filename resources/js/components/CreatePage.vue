<template>
    <div class="container">
		<h1 class="display-1">Novo Filme</h1>
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
	
	data() {
		return {};
	},
	
	methods: {
		handleSubmit(form) {
			setTimeout(()=> {
				window.location = '/';
			}, 1000);
			return;
			axios.post('', form).then(() => {
				//Com sucesso
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

