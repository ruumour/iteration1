<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::all();
        if($category = request('parent_category')) 
        {
            $events=$events->where('parent_category','LIKE', '%'.$category.'%');
        }
        if($Suburb = request('Suburb'))
        {
            $events->where('Suburb',$Suburb);
        }
        // $events = $events->get();
        return view('Events.display',compact('events'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $events = Events::where('title', 'LIKE', '%'.$keyword.'%')->get();
        return view('Events.display',compact('events'));
    }
}
