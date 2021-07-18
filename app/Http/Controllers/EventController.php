<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $event = Events::all()->toArray();
        return view('events', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // form validation
      $event = $this->validate(request(), [
      'name' => 'required',
      'description' => 'required',
      'location' => 'required',
      'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:500',
      'type' => 'required',
      'start_time' => 'required',
      'end_time' => 'required',
      ]);
      //Handles the uploading of the image
      if ($request->hasFile('image')){
      //Gets the filename with the extension
      $fileNameWithExt = $request->file('image')->getClientOriginalName();
      //just gets the filename
      $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      //Just gets the extension
      $extension = $request->file('image')->getClientOriginalExtension();
      //Gets the filename to store
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      //Uploads the image
      $path =$request->file('image')->storeAs('public/images', $fileNameToStore);
      }
      else {
      $fileNameToStore = 'noimage.jpg';
      }
      // create an event object and set its values from the input
      $event = new Events;
      $event->name = $request->input('name');
      $event->description = $request->input('description');
      $event->location = $request->input('location');
      $event->image = $fileNameToStore;
      $event->type = $request->input('type');
      $event->start_time = $request->input('start_time');
      $event->end_time = $request->input('end_time');
      $userid = auth()->user()->id;
      $event->userid = $userid;
      // save the Event object
      $event->save();
      // generate a redirect HTTP response with a success message
      return back()->with('success', 'Event has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
