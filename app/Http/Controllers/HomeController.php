<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function example()
    {
        return response()->turbolinks('/home');
    }

    public function login()
    {
        return view('login');
    }

    public function loginUJS()
    {
        return view('login_ujs');
    }


    public function store(StoreRequest $request)
    {
        return response()->turbolinks('/home');
    }

    /**
     * Alternative
     *
     * Using Validation
     */
    public function storeWithManualValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        return redirect('/home')
            ->with('_turbolinks_location', '/home');
    }
}
