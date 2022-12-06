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

    public function create() {
        return view('meetups.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('imgs', 'public');
        }

        $formFields['user_id'] = auth()->id();
        Meetup::create($formFields);
        return redirect('profile/' . auth()->user()->username);
    }
}
