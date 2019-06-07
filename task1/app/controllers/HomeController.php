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

	protected $menuList = [
        'Home' => '',
        'Articles' => 'articles',
        'About' => 'about',
        'Contact us' => 'contact-us'
    ];

	public function showWelcome()
	{

		return View::make('hello');

	}

    public function index()
    {

        return View::make('view.index', ['list' => $this->menuList]);
	}

    public function articles()
    {
        $articles = [
            'article 1',
            'article 2',
            'article 3',
            'article 4',
            'article 5',
            'article 6',
            'article 7',
        ];
        return View::make('view.articles', ['list' => $this->menuList, 'articles' => $articles]);
	}

    public function article($id)
    {
        if($id>0 && $id<=7){
            return View::make('view.article', ['list' => $this->menuList, 'num' => $id]);
        }
        return View::make('view.articles', ['list' => $this->menuList, 'articles' => []]);

    }

    public function about()
    {
        return View::make('view.about', ['list' => $this->menuList]);

    }

    public function contact($error = null)
    {
        return View::make('view.contact', ['list' => $this->menuList, 'error' => $error]);
    }

    public function formCheck()
    {

        if (!($name = Input::get('name')) || !($message = Input::get('message')))
        {
            return $this->contact(true);
        }
        return Redirect::route('thankyou', ['name' =>  $name]);
    }

    public function success()
    {
        $name = Input::get('name');
        return View::make('view.success', ['list' => $this->menuList, 'name' => $name]);

    }
}