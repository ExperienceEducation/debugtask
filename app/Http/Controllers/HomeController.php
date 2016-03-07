<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
	public function showWelcome() {

		if (!User::checkLoggedIn()) return abort(404);

		return view('home');
	}
}
