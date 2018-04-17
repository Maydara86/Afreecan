<?php

namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $children = Child::orderBy('id', 'desc')->paginate(50);
        return view('welcome', compact('children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('children.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'gender' => '',
            'birth_date' => 'required',
            'grade' => '',
            'school' => 'required|max:255',
            'city' => 'required|max:255',
            'height' => '',
            'shoe_size' => '',
            'siblings' => '',
            'anomaly' => '',
            'guardian_number' => '',
            'other' => 'max:255'
        ]);

        auth()->user()->addChild(new Child(request([
        'first_name',
        'last_name',
        'gender',
        'birth_date',
        'grade',
        'school',
        'city',
        'height',
        'shoe_size',
        'siblings',
        'anomaly',
        'guardian_number',
        'other'
        ])));

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function show(Child $child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function edit(Child $child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Child $child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function destroy(Child $child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function addGodparent(Request $request)
    {
        $child = Child::find($request->id);
        $this->validate(request(), [
            'godparent' => 'required|integer',
        ]);
        $child->user_id = $request->godparent;
        $child->save();
        return redirect('/');
    }

    public function revokeGodparent(Request $request)
    {
        $child = Child::find($request->id);
        $child->user_id = 1;
        $child->save();
        return redirect('/');
    }
}
