<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use \Validator;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
                /* ->with('_turbolinks_location', '/login'); */
        }

        return redirect('/home')
            ->with('_turbolinks_location', '/home');
    }
}
