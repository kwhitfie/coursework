<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Gate;

class EventsController extends Controller
{
    //
    public function list() {
      return view('/list', array('events'=>events::all()));
    }

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
        // save the Event object
        $event->save();
        // generate a redirect HTTP response with a success message
        return back()->with('success', 'event has been added');
    }

    public function display()
    {
       $eventsQuery = Events::all();
       if (Gate::denies('displayall')) {
         $eventsQuery=$eventsQuery->where('userid', auth()->user()->id);
         return view('/display', array('events'=>$eventsQuery));
        }
     }


    public function create()
    {
      return view('events.events');
    }
}
?>
