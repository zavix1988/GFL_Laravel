<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showIndex()
	{
		return View::make('index');
	}

	public function postImage()
	{
		$validator = Validator::make(Input::all(), [
			'name' => 'required|min:3|max:255',
			'description' => 'max:255',
			'img' => 'required|image|mimes:jpeg'
		]);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator);
		}

		$imgFile = Input::file('img');
		$filename = uniqid('img_').'.jpg';
		$path = Config::get('images.path');
		$imgFile->move($path, $filename);
		
		
		$image = new Image();
		$image->name = Input::get('name');
		$image->description = Input::get('description');
		$image->user_id = Auth::id();
		$image->filename = $filename;
		$image->save();
		return Redirect::back();

	}

	public function showImage($id)
	{
		$image = Image::find($id);
		if(!$image) {
			App::abort('404');
		}
		return View::make('image', compact('image'));
	}
	public function getImageFile($id)
	{
		$image = Image::find($id);
		if(!$image) {
			App::abort('404');
		}
		$response = Response::make(file_get_contents(Config::get('images.path') . '/' . $image->filename, 200));
		$response->header('Content-Type', 'image/jpeg');
		return $response;
	}

	public function postComment()
	{
		$imgId = Input::get('image_id');
		$text = Input::get('text');
		
		$image = Image::find($imgId);
		if(!$image || !$text) {
			App::abort('404');
		}
		$comment = new Comment();
		$comment->image_id = $imgId;
		$comment->user_id = Auth::id();
		$comment->text = $text;
		$comment->save();
		return Redirect::back();
	}
}
