<template>
	<div class="movie" @click="handleMovieClick">
		<img
			class="cover"
			:src="cover"/>
		
		<div class="title">
			{{name}}
		</div>
		<small class="year">
			{{year}}
		</small>
    </div>
</template>

<script>
    export default {
		props: [
			'id', 'name', 'year', 'director', 'synopsis', 'cover'
		],
        methods: {
			handleMovieClick() {
				//Pq não o goTo aqui?
				this.$emit('click', this.id);
			}
		}
    }
</script>
<style scoped>
	.movie {
		margin: 5px;
		padding: 10px;
		cursor: pointer;
	}
	.cover{
		box-shadow: 1px 1px 10px #000;
		max-width: 150px;
	}
	.title {
		font-size: 18px;
		font-weight: bold;
		color: white;
	}
	
	.year {
		color:#aaa;
		display: block;
	}
</style>
