<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;

class UserController extends Controller
/**
 * Shows the authentication page for logging in
 * 
 * @return  auth login page
 */
{
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Checks the data coming new and registering users and
     * stores them into the database
     * 
     * @param Request $request
     * @return Response
     * 
     */
    public function store(UsersRequest $request)
    {
        /**
         * $validatedData = $request->validate([
         *    'Full Name' => 'required',
         *    'Password' => 'required|min:8',
         *    'Email' => 'required',  ]);
         * 
         */
        $validated = $request->validated();
    }
}
