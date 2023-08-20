<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $objects = array();
        $users = User::inRandomOrder()
            ->limit(10)
            ->get();

        foreach($users as $user){
            $id = $user->id;
            $courses = Course::where('user_id', $id)->get();

            array_push($objects, $courses);
        }

        return view('home', compact(['objects']));
    }
}
