<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        $users = [
            [
                'name' => 'Alex',
                'age' => 30,
            ],
            [
                'name' => 'Dan',
                'age' => 25,
            ],
            [
                'name' => 'John',
                'age' => 17,
            ]
        ];

        return view('profile', ['users' => $users]);
    }
}
