<template>
	<div>	
		<navbar @click="goToNew" @input="handleInput"/>
		<div class="container-fluid">
			<div v-if="filteredMovies.length === 0">
				<h2>Não há filmes para serem exibidos</h2>
			</div>
			<div v-else class="d-inline-block flex-fill" v-for="movie in filteredMovies" :key="movie.id">
				<movie
					v-bind="movie"
					@click="goToDetails"
				/>
			</div>
		</div>
	</div>
</template>

<script>

import Navbar from './Navbar';
import Movie from './Movie';

export default {
	components: {
		Navbar,
		Movie
	},
	
	data() {
		return {
			movies: [],
			loading: true,
			filterValue: '',
		}
	},

	computed: {
		filteredMovies() {
			return this.movies.filter((item) => {
				return new RegExp(this.filterValue, 'i').test(item.name);
			});

		}
	},

	mounted() {
		axios.get('/api/list').then((response) => {
			this.movies = [...response.data.movies];
			this.loading = false;
		});
	},
	methods: {
		goToDetails(id) {
			window.location = '/details/#/' + id;
		},
		goToNew(id) {
			window.location = `/create/`;
		},
		handleInput(input) {
			this.filterValue = input;
		}
	},	
}
</script>
