<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index()
	{
		$dataUser = User::all();

		return view('userSignUp', [
			'dataUser' => $dataUser,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validate = $request->validate([
			'name' => ['required', 'max:255'],
			'username' => ['required', 'min:3', 'max:255', 'unique:users'],
			'email' => ['required', 'email:dns', 'unique:users'],
			'password' => ['required', 'min:5', 'max:255']
		]);
		$validate['password'] = bcrypt($validate['password']);

		$dataUser = $request->all();
		// dd($dataVisitor);

		$user = new User($validate);
		$user->remember_token = Str::random(60);
		$user->phone = $dataUser['phone'];
		$user->division = $dataUser['division'];
		$user->role = $dataUser['role'];
		if ($request->hasFile('photo')) {
			$request->file('photo')->move('usersPhoto/', $request->file('photo')->getClientOriginalName());
			$user->photo = $request->file('photo')->getClientOriginalName();
		}
		$user->save();
		// dd('success');

		return redirect('/userlogin')->with('success', 'Registration successful');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user)
	{
		//
	}
}
