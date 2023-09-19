<?php

namespace App\Http\Controllers;

use App\Events\EventPusher;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index(Request $request)
    {
        return view('pusher');
    }

    public function change(Request $request)
    {
        $color = $request->input('color');

        event(new EventPusher(
            color: $color
        ));

        return response()->json(['success' => true, 'message' => 'Event was successfully changed']);
    }

    public function color()
    {
        return view('color');
    }
}
