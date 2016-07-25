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
        return redirect('/home')
            ->with('_turbolinks_location', '/home');
    }

    public function login()
    {
        return view('login');
    }

    public function store(StoreRequest $request)
    {
        return redirect('/home')
            ->with('_turbolinks_location', '/home');
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
