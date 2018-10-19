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
						:src="cover"/>
				</div>

				<div class="col-8">
					<h1 class="title">{{title}}</h1>

					<h6>
						<strong>Ano:</strong> {{year}}
					</h6>

					<h6>
						<strong>Diretor:</strong>{{director}}
					</h6>

					<h5 class="sinopse">
						{{synopsis}}
					</h5>

					<button class="btn btn-success btn-lg" @click="handleEditClick" type="submit">Editar</button>
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
				movieId: null
			}
		},
        mounted() {
			this.movieId = window.location.href.split('/#/')[1];

		},
		methods: {
			handleEditClick() {
				window.location = '/edit/#/' + this.id;
			},
			handleCloseClick() {
				window.history.back();
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