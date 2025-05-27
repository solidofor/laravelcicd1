<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function show()
    {
        return response()->json(['message' => Message::first()->content]);
    }
}
