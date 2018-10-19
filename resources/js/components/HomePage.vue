<template>
	<div>	
		<navbar @click="goToNew"/>
		<div class="container-fluid">
			<div class="d-inline-block flex-fill" v-for="movie in filteredMovies" :key="movie.id">
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
			movies: [
				{
					id: '1',
					name: 'Movie 1s',
					year: 2018,
					director: 'Diretor',
					synopsis: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi libero eius excepturi veritatis, incidunt qui nesciunt consequatur consequuntur quibusdam, ipsum ipsa placeat suscipit explicabo sit error recusandae quis deleniti. Magnam!',
					cover: 'https://vignette.wikia.nocookie.net/phineasferb/images/6/6a/Phineas_e_Ferb_O_Filme_Atrav%C3%A9s_da_2%C2%AA_Dimens%C3%A3o_Capa_do_DVD.png/revision/latest?cb=20110822034027&path-prefix=pt-br',
				},
				{
					id: '1',
					name: 'Movie 1s',
					year: 2018,
					director: 'Diretor',
					synopsis: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi libero eius excepturi veritatis, incidunt qui nesciunt consequatur consequuntur quibusdam, ipsum ipsa placeat suscipit explicabo sit error recusandae quis deleniti. Magnam!',
					cover: 'https://vignette.wikia.nocookie.net/phineasferb/images/6/6a/Phineas_e_Ferb_O_Filme_Atrav%C3%A9s_da_2%C2%AA_Dimens%C3%A3o_Capa_do_DVD.png/revision/latest?cb=20110822034027&path-prefix=pt-br',
				},
				{
					id: '1',
					name: 'Movie 1s',
					year: 2018,
					director: 'Diretor',
					synopsis: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi libero eius excepturi veritatis, incidunt qui nesciunt consequatur consequuntur quibusdam, ipsum ipsa placeat suscipit explicabo sit error recusandae quis deleniti. Magnam!',
					cover: 'https://vignette.wikia.nocookie.net/phineasferb/images/6/6a/Phineas_e_Ferb_O_Filme_Atrav%C3%A9s_da_2%C2%AA_Dimens%C3%A3o_Capa_do_DVD.png/revision/latest?cb=20110822034027&path-prefix=pt-br',
				},
				{
					id: '1',
					name: 'Movie 1s',
					year: 2018,
					director: 'Diretor',
					synopsis: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi libero eius excepturi veritatis, incidunt qui nesciunt consequatur consequuntur quibusdam, ipsum ipsa placeat suscipit explicabo sit error recusandae quis deleniti. Magnam!',
					cover: 'https://vignette.wikia.nocookie.net/phineasferb/images/6/6a/Phineas_e_Ferb_O_Filme_Atrav%C3%A9s_da_2%C2%AA_Dimens%C3%A3o_Capa_do_DVD.png/revision/latest?cb=20110822034027&path-prefix=pt-br',
				},
				{
					id: '1',
					name: 'Movie 1s',
					year: 2018,
					director: 'Diretor',
					synopsis: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi libero eius excepturi veritatis, incidunt qui nesciunt consequatur consequuntur quibusdam, ipsum ipsa placeat suscipit explicabo sit error recusandae quis deleniti. Magnam!',
					cover: 'https://vignette.wikia.nocookie.net/phineasferb/images/6/6a/Phineas_e_Ferb_O_Filme_Atrav%C3%A9s_da_2%C2%AA_Dimens%C3%A3o_Capa_do_DVD.png/revision/latest?cb=20110822034027&path-prefix=pt-br',
				},
				{
					id: '1',
					name: 'Movie 1s',
					year: 2018,
					director: 'Diretor',
					synopsis: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi libero eius excepturi veritatis, incidunt qui nesciunt consequatur consequuntur quibusdam, ipsum ipsa placeat suscipit explicabo sit error recusandae quis deleniti. Magnam!',
					cover: 'https://vignette.wikia.nocookie.net/phineasferb/images/6/6a/Phineas_e_Ferb_O_Filme_Atrav%C3%A9s_da_2%C2%AA_Dimens%C3%A3o_Capa_do_DVD.png/revision/latest?cb=20110822034027&path-prefix=pt-br',
				},
			],
			loading: true,
		}
	},

	computed: {
		filteredMovies() {
			return this.movies;
		}
	},

	mounted() {
		axios.get('', (data) => {
			this.movies = data.movies;
			this.filteredMovies = [...this.movies];
			this.loading = false;
		});
	},
	methods: {
		goToDetails(id) {
			window.location = '/details/#/' + id;
		},
		goToNew(id) {
			window.location = `/create/`;
		}
	},	
}
</script>
