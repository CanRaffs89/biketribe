<?php

namespace App\Http\Controllers;

use App\Models\Meetup;
use Illuminate\Http\Request;

class MeetupController extends Controller
{
    public function index() {
        $imgSrc = "angel-santos-96rlfzZ6LwY-unsplash.jpg";
        return view('index', [
            'meetups' => Meetup::latest()->filter(request(['search']))->get(), 'imgSrc' => $imgSrc
        ]);
    }

    public function show(Meetup $meetup) {
        $imgSrc = "angel-santos-96rlfzZ6LwY-unsplash.jpg";
        return view('meetups.show', [
            'meetup' => $meetup, 'imgSrc' => $imgSrc
        ]);
    }

    public function create() {
        return view('meetups.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required'
        ]);
        $formFields['user_id'] = auth()->id();
        Meetup::create($formFields);
        return redirect('profile/' . auth()->user()->username);
    }
}
