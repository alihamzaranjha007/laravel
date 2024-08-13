<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return phpinfo();
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo 'Creating';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo 'Storing <br/>';
        $uri = $request->path();
        echo '<br>URI: '.$uri;

        $url = $request->url();
        echo '<br>';

        echo 'URL: '.$url;
        $method = $request->method();
        echo '<br>';

        echo 'Method: '.$method;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo 'Showing: ';
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo 'Editing: ';
        echo $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        echo 'Updating: ';
        echo $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        echo 'Deleting: ';
        echo $id;
    }

    //custom functions for login
    public function login(Request $request){
        $credentials = $request->validate(
            ['email' =>'required|email',
            'password' => 'required|min:8']
        );

        if($credentials){
            return view('admin.index');
        }
    }
}
