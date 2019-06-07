<?php

class HelloController extends \BaseController {

	public function showHello()
	{
		$name = Input::old('name');

		$list = [
			'About' => '/about',
			'Contact Us' => '/contact',
			'Terms of Condition' => '/tos'
		];
		return View::make('hello2', ['name' => $name, 'list'=> null]);
	}

	public function showForm()
	{
		return View::make('form');
	}

	public function postSubmit()
	{
		if(Input::has('name')){
			return Redirect::action('HelloController@showHello')->withInput();
		}
		return Redirect::route('form');
	}

/* 	public function dbTest($id)
	{ */
		//$user = DB::select('SELECT email FROM laravel_users WHERE id = ?', [$id]);
		//$user = DB::table('users')->where('id', $id)->select('email')->get();
		/*DB::table('users')
			->insert([
				'name' => 'test2',
				'email' => 'test2@laravel.loc'
		]);*/
/* 		if(!DB::table('users')->where('name', 'test5')->count()){
			$user = DB::table('users')
				->insert([
					'name' => 'test5',
					'email' => 'test5@laravel.loc'
			]);
		}else{
			return "User exists";
		} */
/* 		if(DB::table('users')->where('name', 'test5')->count()){
			$user = DB::table('users')->where('name', 'test5')->take(1)->delete();
		}else{
			return "no user";
		} */

		//$user = DB::table('users')->where('name', 'like' ,'%t')->first();
		
		//$user = DB::table('users')->where('name', 'like' ,'%t')->pluck('email');
		
		//$user = DB::table('users')->whereIn('name', ['test', 'test2'])->lists('email');
		//$user = DB::table('users')->where('name', 'test')->orWhere('name', 'test2')->lists('email');
	/* 	$user = DB::table('users')->where('name', 'test')->orWhere(function($query){
			$query->where('name', 'test2')->where('id', 2);
		})->get(); */
		
		//$artists = Artist::skip(100)->take(10)->get();
		
		//return View::make('songlist', compact('artists'));
		
		
/* 		$artist = Artist::find($id);
		var_dump($artist->tracks);
		$albums = $artist->albums;
		foreach ($albums as $album) {
			echo $album->Title.'('.$album->artist->Name.')<br>';
			$tracks = $album->tracks;
			foreach ($tracks as $track) {
				echo ' - '.$track->Name.' ('. $track->album->Title.')<br>';
			}
		}
		
	} */
}
