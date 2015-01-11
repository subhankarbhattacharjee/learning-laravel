<?php
namespace admin;

use View;
use Validator;
use Input;
use Redirect;
use User;
use Auth;

class AuthController extends \BaseController {

	public function getLogin() {

		if (Auth::check()) {
			return Redirect::intended('admin/posts');
		}
		
		return View::make('admin.auth.login');
	}

	public function postLogin() {
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$remember_me = array_key_exists('remember_me', $data);

		if (Auth::attempt(array('email' => $data['email'], 'password' => $data['password']),$remember_me))
		{
		    return Redirect::intended('admin/posts');
		}

		return Redirect::route('admin.auth.login');
	}

	public function logout() {
		Auth::logout();

		return Redirect::route('admin.auth.login');
	}
}
