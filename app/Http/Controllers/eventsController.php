<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function codeCombat() {
        return view('events.code-combat');
    }

    public function debug() {
        return view('events.debug');
    }

    public function gaming() {
        return view('events.gaming');
    }

    public function hackathon() {
        return view('events.hackathon');
    }

    public function memeGram() {
        return view('events.meme-gram');
    }

    public function natyakshetra() {
        return view('events.natyakshetra');
    }

    public function quiz() {
        return view('events.quiz');
    }

    public function paperPresentation() {
        return view('events.paper-presentation');
    }

}
