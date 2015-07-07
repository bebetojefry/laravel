<?php namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Model\Url;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function create(Request $request){		
		$val = Url::saveUrl($request);
		$path = route('short_url', array('short' => $val->getAttribute('short')));
		$resp = new Response();
		$resp->setContent($path);
		return $resp;
	}

	public function short($code){
		$url = Url::getBy(array('short' => $code));
		$path = $url->getAttribute('long');
		return redirect()->away($path);
	}

}
