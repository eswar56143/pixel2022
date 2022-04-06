<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index() {
        return view('register');
    }

    public function register(Request $data) {

        $user = User::create([
            'name' => $data->name,
            'email' => $data->email,
            'contact' => $data->contact,
            'branch' => $data->branch,
            'admnno' => $data->admnno,
            'college' => $data->college,
            'location' =>$data->location,
        ]);
        return view('payment',compact('user'));
    }
}
