<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;

class MovieRentalController extends Controller
{
	public function save(Request $in)
	{
		if ($in->id) { //Edita
			$movie = Movie::find(Crypt::decrypt($in->movie_id));
		} else {
			$movie = new Movie; //Cria novo
		}
		$movie->name = $in->name;
		$movie->year = $in->year;
		$movie->director = $in->director;
		$movie->synopsis = $in->synopsis;

		$movie->save();

		return response()->json(
			'status' => 1,
			'movie' => $movie,
		);
	}

	public function edit(Request $in)
	{
		$movie = Movie::find(Crypt::decrypt($in->id));

		return response()->json(
			'status' => 1,
			'movie' => $movie,
		);
	}

	public function list()
	{
		$movie = Movie::get(['name', 'year', 'director', 'synopsis']);

		return response()->json(
			'status' => 1,
			'movie' => $movie,
		);
	}

	public function delete(Request $in)
	{
		$movie = Movie::find(Crypt::decrypt($in->id));
		$movie->delete();

		return response()->json(
			'status' => 1,
			'message' => 'Filme deletado com sucesso',
		);
	}

}
