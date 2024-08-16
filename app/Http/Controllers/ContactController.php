<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $contacts = contact::query()
            ->when($request->search, function ($query) use ($request) {

                $query->where('name', 'like', "%{$request->search}%")
                      ->orWhere('email', 'like', "%{$request->search}%");

            })
            ->when($request->sort, function ($query) use ($request) {

                $query->orderBy($request->sort, $request->direction ?? 'asc');

            })
            ->get();

        return view('contacts.index', compact('contacts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:contacts,email',

        ]);

        contact::create($request->all());

        return redirect()->route('contacts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {

        return view('contacts.show', compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {

        return view('contacts.edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:contacts,email,' . $contact->id,

        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {

        $contact->delete();

        return redirect()->route('contacts.index');

    }
}
