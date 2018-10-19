<template>
	<nav class="navbar navbar-dark bg-dark d-flex flex-row">
		<input class="search flex-fill" type="search" placeholder="Pesquise pelo nome do filme..." aria-label="Pesquise pelo nome do filme...">
		<button @click="$emit('click')" class="btn btn-success btn-lg" type="submit">Novo Filme</button>
	</nav>
</template>
<style scoped>
	.search {
		border: 0;
		background-color: #181816;
		color: white;
		padding: 10px;
		font-size: 32px;
		line-height: 40px;
		margin-right: 10px;
	}
	.navbar-dark {
		background-color: #181816!important;
	}
</style>