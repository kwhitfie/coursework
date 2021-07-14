<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    //
    public function list() {
      return view('/list', array('events'=>events::all()));
    }
}

?>
