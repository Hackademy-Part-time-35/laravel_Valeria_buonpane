<?php

namespace App\Http\Controllers;

class AccountController extends Controller
{
	public function searchUsers()
	{
		return view('account.user-list');
	}
}