<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class checkController extends Controller
{
    public function emailCheck(Request $request) {

        if ($request->ajax()) {
            $email = $request->get('email');

            $user = User::where('email', $email)->get();
            $rows = $user->count();

            if ($rows != 0 ) {
                echo "You have already registered with this email ";
                echo "<script>$('#submit').prop('disabled',true);</script>";
            }
            else {
                echo "<script>$('#submit').prop('disabled',false);</script>";
            }
        }
    }
}
