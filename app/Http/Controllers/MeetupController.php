<?php

namespace App\Http\Controllers;

use App\Models\Meetup;
use Illuminate\Http\Request;

class MeetupController extends Controller
{
    public function index() {
        return view('index', [
            'meetups' => Meetup::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Meetup $meetup) {
        return view('meetups.show', [
            'meetup' => $meetup
        ]);
    }
}
