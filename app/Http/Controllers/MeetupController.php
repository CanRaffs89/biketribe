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

    public function edit(Meetup $meetup) {
        return view('meetups.edit', ['meetup' => $meetup]);
    }

    public function update(Request $request, Meetup $meetup) {
        if($meetup->user_id != auth()->id()){
            abort(403, 'You do not have permission to do that');
        }
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
        $meetup->update($formFields);
        return redirect('profile/' . auth()->user()->username)->with('success', 'Meetup updated');
    }
}

// Common routes
// index - show all
// show - show single
// create - show form to create new
// store - store new
// edit - show form to edit
// update - update
// destroy - delete
