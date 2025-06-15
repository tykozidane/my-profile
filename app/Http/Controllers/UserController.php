<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Get Access to Database User
use App\Models\User;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $users = User::latest()->paginate(10);

        //render view with products
        return view('test', compact('users'));
    }
    
}
