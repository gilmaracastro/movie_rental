<template>
	<div class="wrapper">
		<div class="container">
			<span class="align-middle">
				<button class="btn btn-success btn-lg float-right" @click="handleCloseClick" type="submit">
				<i class="material-icons">close</i>	
			</button>		
			<div class="row justify-content-center">
				<div class="col-4">
					<img
						class="cover float-right w-100"
						:src="movie ? movie.photo : null"/>
				</div>

				<div class="col-8">
					<h1 class="title">{{movie? movie.name : null}}</h1>

					<h6>
						<strong>Ano:</strong> {{movie ? movie.year : null}}
					</h6>

					<h6>
						<strong>Diretor:</strong>{{movie ? movie.director : null}}
					</h6>

					<h5 class="sinopse">
						{{movie ? movie.synopsis : null}}
					</h5>
					
					<div v-if="!confirmDelete">
						<button class="btn btn-outline-danger btn-lg" @click="confirmDelete = true" type="submit">Excluir</button>
						<button class="btn btn-success btn-lg" @click="handleEditClick" type="submit">Editar</button>
					</div>
					<div v-if="confirmDelete">
						<h5>Deseja realmente excluir esse filme?</h5>
						<button class="btn btn-danger btn-lg" @click="handleDeleteClick" type="submit">Excluir</button>
						<button class="btn btn-outline-light btn-lg" @click="confirmDelete = false" type="submit">Cancelar</button>
					</div>
				</div>

			</div>
			</span>
		</div>
	</div>
</template>

<script>
    export default {
		
		data() {
			return {
				paramId: null,
				confirmDelete: false,
				movie: {
					director: '',
					id: '',
					name: '',
					photo: '',
					synopsis: '',
					year: '',
				}
			};
		},
		
		created() {
			this.paramId = window.location.href.split('/#/')[1];
			axios.get('/api/show/' + this.paramId).then((response) => {
				this.movie = {...response.data.movie};
			});

		},
		
		methods: {
			handleEditClick() {
				window.location = '/edit/#/' + this.paramId;
			},
			handleCloseClick() {
				window.history.back();
			},
			handleDeleteClick() {
				axios.delete('/api/delete/' + this.paramId).then((response) => {
					window.location = '/';
				});
			}
		}
    }
</script>

<style scoped>
	h1, h5 {
		color: white!important;
	}

	h6 {
		color: #38c172;
	}
	.wrapper {
		height: 100vh;
	}
</style>