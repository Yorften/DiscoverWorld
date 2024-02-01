<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdventureController extends Controller
{
    public function index()
    {
        return view('adventures.index', [
            'adventures' => Adventure::with('images', 'destination')->filter(request(['destination', 'date']))->get(),
            'destinations' => Destination::all(),
        ]);
    }

    public function popular()
    {
        return view('adventures.popular', ['adventures' => Adventure::with('images')->latest()->take(6)->get()]);
    }

    public function show(Adventure $adventure)
    {
        return view('adventures.show', ['adventure' => $adventure]);
    }

    public function create()
    {
        return view('adventures.create', ['destinations' => Destination::all()]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'destination' => Rule::requiredIf(function () use ($request) {
                return $request->input('newDestination') === null;
            }),
            'newDestination' => Rule::requiredIf(function () use ($request) {
                return $request->input('destination') === null;
            }),
            'image' => 'image',
        ]);

        if ($formFields['destination'] === null) {
            $result = Destination::where('name', $formFields['newDestination'])->get();

            if ($result->first()) {
                Adventure::create([
                    'title' => $formFields['title'],
                    'desc' => $formFields['desc'],
                    'destination_id' => $result->first()->id,
                ]);
            } else {
                $newDestination = Destination::create(['name' => $formFields['newDestination']]);
                $insertedAdventure = Adventure::create([
                    'title' => $formFields['title'],
                    'desc' => $formFields['desc'],
                    'destination_id' => $newDestination->id,
                ]);
            }
        } else {
            $insertedAdventure = Adventure::create([
                'title' => $formFields['title'],
                'desc' => $formFields['desc'],
                'destination_id' => $formFields['destination'],
            ]);
        }

        return redirect('/adventures/' . $insertedAdventure->id);
    }

    public function stats()
    {
        return view('adventures.stats', ['stats' => Adventure::all()->count()]);
    }
}
