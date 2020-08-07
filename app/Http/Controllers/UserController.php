<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // always ensure user is authenticated before anything in this controller
        $this->middleware('auth');
    }

    /**
     * Show create user form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show_create()
    {
        return view('create_user');
    }

    /**
     * Show all users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show_list()
    {
        $users = User::all();
        return view('list_users', compact('users'));
    }

    /**
     * Expects create form data.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('pass')),
            'blue_tag' => $request->input('tag'),
            'agency_id' => 1,
            'team_id' => 1,
            'start_date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $users = User::all();
        return view('list_users', compact('users'));
    }
}
