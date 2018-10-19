<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
use App\Movie;

class MovieRentalController extends Controller
{
	public function list()
	{
		$movie = Movie::get(['name', 'year', 'director', 'synopsis', 'photo']);

		return response()->json([
			'movie' => $movie,
		]);
	}

	public function edit(Request $in)
	{
		$movie = Movie::find(Crypt::decrypt($in->id));

		return response()->json(['movie' => $movie]);
	}

	public function save(Request $in)
	{
		$movie = Movie::create($in->all());

		return response()->json(['movie' => $movie, 201]);
	}

	public function update(Request $in)
	{
		$movie = Movie::findOrFail(Crypt::decrypt($in->movie_id));
		$movie->update($in->all());

		return response()->json(['movie' => $movie, 200]);
	}

	public function delete(Request $in)
	{
		$movie = Movie::find(Crypt::decrypt($in->id));
		$movie->delete();

		return response()->json([null, 204]);
	}

}
