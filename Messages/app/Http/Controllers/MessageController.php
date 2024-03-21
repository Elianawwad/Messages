<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.home');
    }
    public function messages()
    {
        $messages = Message::latest()->paginate(25);

        return view('messages',compact('messages'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50|email|',
            'message' => 'required|string',
        ]);
        Message::create($request->all());
        return redirect()->route('main.index')->with('success', 'Your message was sent, thank you!');
    }


    /**
     * Display the specified resource.
     */
    public function show($variable)
    {
        $message = Message::findorfail($variable);

        return view('show_message', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($variable)
    {
        
      $message = Message::findorfail($variable);

      $message->delete();
      return redirect()->route('messages')->with('success-delete', 'Message Deleted successfully');
    }
}
