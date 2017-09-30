<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{
		public function create()
		{
			return view('users.create');
		}

		public function store(Request $request)
		{
			User::create($request->all());
			return 'Success';
		}

		public function all_users()
		{
			$all_users = DB::table('users')
												->select('id', 'name', 'email', 'username')
												->simplePaginate(25);
			return view('all_users', ['all_users' => $all_users]);
		}

		public function profile($username)
		{
			$user = User::where('username', $username)->get();

			return view('profile', ['user' => $user]);
		}
}
