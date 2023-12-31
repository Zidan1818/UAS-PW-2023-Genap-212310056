<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        return view('admin.pesan', [
            'messages' => Message::all(),
            'title' => 'Pesan'
        ]);
    }
}
